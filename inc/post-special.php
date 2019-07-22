<?php
add_action( 'init', function () {
	register_post_type( 'special', [
		'has_archive'   => true,
		'public'        => true,
		'supports'      => [ 'title', 'editor', 'thumbnail' ],
		'label'         => '特集',
		'menu_icon'     => 'dashicons-media-default',
		'show_in_rest'  => true,
		'rewrite'       => [
			'with_front' => false
		],
	] );

	register_taxonomy( 'special-tag', [ 'special' ], [
		'label'                 => 'タグ',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'rewrite'               => [
			'hierarchical' => true,
		],
		'show_in_rest'          => true,
	] );
} );

