<?php
/**
 * Description: WordPress helpers from CSSLLC.
 * Author URI: https://develop.calebstauffer.com
 * Author: Caleb Stauffer
 * Plugin URI: https://gist.github.com/crstauf/46a29f046cfffcaf2829401ae0773c90
 */

if ( !function_exists( 'create_post_type_labels' ) ) {
	
	/** 
	* Helper to create post type labels.
	*
	* @param string $singular
	* @param string $plural
	* @param array $overrides
	* @return array
	*/
	function create_post_type_labels( string $singular, string $plural, array $overrides = array() ) {
		return array_filter( wp_parse_args( $overrides, array(
			'name'                     => $plural,
			'singular_name'            => $singular,
			'add_new'                  => sprintf( 'Add %s', $singular ),
			'add_new_item'             => sprintf( 'Add New %s', $singular ),
			'edit_item'                => sprintf( 'Edit %s', $singular ),
			'new_item'                 => sprintf( 'New %s', $singular ),
			'view_item'                => sprintf( 'View %s', $singular ),
			'view_items'               => sprintf( 'View %s', $plural ),
			'search_items'             => sprintf( 'Search %s', $plural ),
			'not_found'                => sprintf( 'No %s found', strtolower( $plural ) ),
			'not_found_in_trash'       => sprintf( 'No %s found in Trash', strtolower( $plural ) ),
			'parent_item_colon'        => sprintf( 'Parent %s:', $plural ),
			'all_items'                => sprintf( 'All %s', $plural ),
			'archives'                 => sprintf( '%s Archives', $singular ),
			'attributes'               => sprintf( '%s Attributes', $singular ),
			'insert_into_item'         => sprintf( 'Insert into %s', strtolower( $singular ) ),
			'uploaded_to_this_item'    => sprintf( 'Uploaded to this %s', strtolower( $singular ) ),
			'featured_image'           => null,
			'set_featured_image'       => null,
			'remove_featured_image'    => null,
			'use_featured_image'       => null,
			'menu_name'                => $plural,
			'filter_items_list'        => sprintf( 'Filter %s list', $plural ),
			'items_list_navigation'    => sprintf( '%s list navigation', $plural ),
			'items_list'               => sprintf( '%s list', $plural ),
			'item_published'           => sprintf( '%s published.', $singular ),
			'item_published_privately' => sprintf( '%s published privately.', $singular ),
			'item_reverted_to_draft'   => sprintf( '%s reverted to draft.', $singular ),
			'item_scheduled'           => sprintf( '%s scheduled.', $singular ),
			'item_updated'             => sprintf( '%s updated.', $singular ),
		) ) );
	}
	
}

if ( !function_exists( 'create_taxonomy_labels' ) ) {

	/**
	 * Helper to create taxonomy labels.
	 *
	 * @param string $singular
	 * @param string $plural
	 * @param array $overrides
	 * @return array
	 */
	function create_taxonomy_labels( string $singular, string $plural, array $overrides = array() ) {
		return array_filter( wp_parse_args( $overrides, array(
			'name'                       => $plural,
			'singular_name'              => $singular,
			'search_items'               => sprintf( 'Search %s', $plural ),
			'popular_items'              => sprintf( 'Popular %s', $plural ),
			'all_items'                  => sprintf( 'All %s', $plural ),
			'parent_item'                => sprintf( 'Parent %s', $singular ),
			'parent_item_colon'          => sprintf( 'Parent %s:', $singular ),
			'edit_item'                  => sprintf( 'Edit %s', $singular ),
			'view_item'                  => sprintf( 'View %s', $singular ),
			'update_item'                => sprintf( 'Update %s', $singular ),
			'add_new_item'               => sprintf( 'Add New %s', $singular ),
			'new_item_name'              => sprintf( 'New %s Name', $singular ),
			'separate_items_with_commas' => sprintf( 'Separate %s with commas', strtolower( $singular ) ),
			'add_or_remove_items'        => sprintf( 'Add or remove %s', strtolower( $singular ) ),
			'choose_from_most_used'      => sprintf( 'Choose from the most used %s', strtolower( $singular ) ),
			'not_found'                  => sprintf( 'No %s found', strtolower( $plural ) ),
			'no_terms'                   => sprintf( 'No %s', $plural ),
		) ) );
	}
	
}