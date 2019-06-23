<?php
/**
 * Plugin name: kouka custom
 * Description: Snow Monkey Extension for Kouka
 * Version: 0.1.0
 *
 * @package kouka-custom
 * @author ko31
 * @license GPL-2.0+
 */

/**
 * Snow Monkey 以外のテーマを利用している場合は有効化してもカスタマイズが反映されないようにする
 */
$theme = wp_get_theme();
if ( 'snow-monkey' !== $theme->template && 'snow-monkey/resources' !== $theme->template ) {
	return;
}

/**
 * Include custom libraries.
 */
foreach ( [ 'inc' ] as $dir_name ) {
	$dir = __DIR__ . '/' . $dir_name;
	if ( is_dir( $dir ) ) {
		foreach ( scandir( $dir ) as $file ) {
			if ( preg_match( '#^[^._].*\.php$#u', $file ) ) {
				require $dir . '/' . $file;
			}
		}
	}
}