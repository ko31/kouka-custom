<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.0.0
 */

use Framework\Helper;

if ( $_lyrics = get_post_meta( get_the_ID(), '_lyrics', true ) ) {
	$_lyrics = wp_trim_words( $_lyrics, 50, '…' );
}
?>

<div class="c-entry-summary__content">
	<?php
	if ( $_zip = get_post_meta( get_the_ID(), '_zip', true ) ) :
		?>
        〒<?php echo esc_html( $_zip ); ?>
	<?php
	endif;
	?>
	<?php
	if ( $_address = get_post_meta( get_the_ID(), '_address', true ) ) :
		?>
		<?php echo esc_html( $_address ); ?>
	<?php
	endif;
	?>
</div>

<div class="c-entry-summary__content">
    <span class="lyrics"><?php echo esc_html( $_lyrics ); ?></span>
</div>
