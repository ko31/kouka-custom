<?php
/**
 * Metabox for the post type school.
 */
add_action( 'cmb2_admin_init', function () {

	$prefix = '_';

	$cmb = new_cmb2_box( [
		'id'           => $prefix . 'metabox_school',
		'title'        => '学校属性',
		'object_types' => [ 'school'],
	] );

	$cmb->add_field( [
		'name' => '学校名',
		'id'   => $prefix . 'school_name',
		'type' => 'text',
	] );

	$cmb->add_field( [
		'name' => '学校名かな',
		'id'   => $prefix . 'school_kana',
		'type' => 'text',
	] );

	$cmb->add_field( [
		'name' => '学校サイトURL',
		'id'   => $prefix . 'school_url',
		'type' => 'text',
	] );

	$cmb->add_field( [
		'name' => '郵便番号',
		'id'   => $prefix . 'zip',
		'type' => 'text',
	] );

	$cmb->add_field( [
		'name' => '住所',
		'id'   => $prefix . 'address',
		'type' => 'text',
	] );

	$cmb->add_field( [
		'name' => '歌詞',
		'id'   => $prefix . 'lyrics',
		'type' => 'textarea',
	] );

	/**
	 * Movies group
	 */
	$movies_id = $cmb->add_field( [
		'id'          => $prefix . 'movies',
		'type'        => 'group',
		'description' => '動画',
		'options'     => array(
			'group_title'   => '動画 {#}',
			'add_button'    => '動画を追加',
			'remove_button' => '動画を削除',
			'sortable'      => true,
		),
	] );

	$cmb->add_group_field( $movies_id, [
		'name' => 'URL',
		'id'   => 'url',
		'type' => 'text',
		'desc' => 'YouTube 動画　URL を入力してください',
	] );

	/**
	 * Sources group
	 */
	$sources_id = $cmb->add_field( [
		'id'          => $prefix . 'sources',
		'type'        => 'group',
		'description' => '音源',
		'options'     => array(
			'group_title'   => '音源 {#}',
			'add_button'    => '音源を追加',
			'remove_button' => '音源を削除',
			'sortable'      => true,
		),
	] );

	$cmb->add_group_field( $sources_id, [
		'name' => 'タイトル',
		'id'   => 'title',
		'type' => 'text',
	] );

	$cmb->add_group_field( $sources_id, [
		'name' => 'URL',
		'id'   => 'url',
		'type' => 'text',
		'desc' => '音源の URL を入力してください',
	] );

	/**
	 * Notes group
	 */
	$notes_id = $cmb->add_field( [
		'id'          => $prefix . 'notes',
		'type'        => 'group',
		'description' => '備考',
		'options'     => array(
			'group_title'   => '備考 {#}',
			'add_button'    => '備考を追加',
			'remove_button' => '備考を削除',
			'sortable'      => true,
		),
	] );

	$cmb->add_group_field( $notes_id, [
		'name' => '備考',
		'id'   => 'description',
		'type' => 'textarea',
	] );

	$cmb->add_group_field( $notes_id, [
		'name' => 'URL',
		'id'   => 'url',
		'type' => 'text',
		'desc' => '備考の参考　URL を入力してください',
	] );

	/**
	 * Links group
	 */
	$links_id = $cmb->add_field( [
		'id'          => $prefix . 'links',
		'type'        => 'group',
		'description' => '関連リンク',
		'options'     => array(
			'group_title'   => 'リンク {#}',
			'add_button'    => 'リンクを追加',
			'remove_button' => 'リンクを削除',
			'sortable'      => true,
		),
	] );

	$cmb->add_group_field( $links_id, [
		'name' => 'タイトル',
		'id'   => 'title',
		'type' => 'text',
		'desc' => '関連リンクタイトルを入力してください',
	] );

	$cmb->add_group_field( $links_id, [
		'name' => 'URL',
		'id'   => 'url',
		'type' => 'text',
		'desc' => '関連リンク　URL を入力してください',
	] );
} );

