<?php
add_action( 'init', function () {
	register_post_type( 'school', [
		'has_archive'   => true,
		'public'        => true,
		'supports'      => [ 'title', 'editor', 'thumbnail', 'comments' ],
		'label'         => '学校',
		'menu_icon'     => 'dashicons-media-default',
		'show_in_rest'  => true,
		'rewrite'       => [
			'with_front' => false
		],
	] );

	register_taxonomy( 'gradation', [ 'school' ], [
		'label'             => '学校区分',
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'           => [
			'hierarchical' => true,
		],
		'show_in_rest'      => true,
	] );

	register_taxonomy( 'prefecture', [ 'school' ], [
		'label'             => '都道府県',
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'           => [
			'hierarchical' => true,
		],
		'show_in_rest'      => true,
	] );

	register_taxonomy( 'initial', [ 'school' ], [
		'label'             => '頭文字',
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'           => [
			'hierarchical' => true,
		],
		'show_in_rest'      => true,
	] );

	register_taxonomy( 'lyricist', [ 'school' ], [
		'label'             => '作詞',
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'           => [
			'hierarchical' => true,
		],
		'show_in_rest'      => true,
	] );

	register_taxonomy( 'composer', [ 'school' ], [
		'label'             => '作曲',
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'           => [
			'hierarchical' => true,
		],
		'show_in_rest'      => true,
	] );

	register_taxonomy( 'pickup', [ 'school' ], [
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

