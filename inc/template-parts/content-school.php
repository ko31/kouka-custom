<ul>
	<?php
	if ( $_school_name = get_post_meta( get_the_ID(), '_school_name', true ) ) :
		?>
        <li>
			<?php echo esc_html( $_school_name ); ?>
			<?php
			if ( $_school_kana = get_post_meta( get_the_ID(), '_school_kana', true ) ) :
				?>
                （<?php echo esc_html( $_school_kana ); ?>）
			<?php
			endif;
			?>
        </li>
	<?php
	endif;
	?>
    <li>
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
    </li>
	<?php
	if ( $_school_url = get_post_meta( get_the_ID(), '_school_url', true ) ) :
		?>
        <li>
            <a href="<?php echo esc_url( $_school_url ); ?>" target="_blank"><?php echo esc_html( $_school_url ); ?></a>
        </li>
	<?php
	endif;
	?>
</ul>

<h2>校歌</h2>
<p>作詞：大木惇夫　作曲：団伊玖磨</p>
<blockquote class="wp-block-quote"><p>
		<?php
		echo nl2br( ( get_post_meta( get_the_ID(), '_lyrics', true ) ) );
		?>
</blockquote>

<?php
// Youtube
if ( $_movies = get_post_meta( get_the_ID(), '_movies', true ) ) :
	global $wp_embed;
	foreach ( $_movies as $_movie ) :
		//TODO: 画角が4:3の動画の場合、classも "c-responsive-container-4-3" を使わないとレイアウトがきまらない。
		?>
        <figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
            <div class="wp-block-embed__wrapper">
                <div class="c-responsive-container-16-9">
					<?php
					echo $wp_embed->run_shortcode( sprintf( '[embed youtube=1]%s[/embed]', $_movie['url'] ) );
					?>
                </div>
            </div>
        </figure>
	<?php
	endforeach;
endif;
?>

<?php
// 音源
if ( $_sources = get_post_meta( get_the_ID(), '_sources', true ) ) :
	?>
    <ul>
		<?php
		foreach ( $_sources as $_source ) :
			?>
            <li><a href="<?php echo esc_url( $_source['url'] ); ?>"
                   target="_blank"><?php echo esc_html( $_source['title'] ); ?></a></li>
		<?php
		endforeach;
		?>
    </ul>
<?php
endif;
?>

<?php
if ( $_notes = get_post_meta( get_the_ID(), '_notes', true ) ) :
	?>
    <h2>備考</h2>
	<?php
	foreach ( $_notes as $_note ) :
		?>
        <blockquote class="wp-block-quote">
            <p><?php echo nl2br( $_note['description'] ); ?></p>
            <cite><a href="<?php echo esc_url( $_note['url'] ); ?>"
                     target="_blank"><?php echo esc_html( $_note['url'] ); ?></a></cite>
        </blockquote>
	<?php
	endforeach;
endif;
?>

<?php
if ( $_links = get_post_meta( get_the_ID(), '_links', true ) ) :
	?>
    <h2>関連リンク</h2>
    <ul>
		<?php
		foreach ( $_links as $_link ) :
			?>
            <li><a href="<?php echo esc_url( $_link['url'] ); ?>"
                   target="_blank"><?php echo esc_html( $_link['title'] ); ?></a></li>
		<?php
		endforeach;
		?>
    </ul>
<?php
endif;
?>
