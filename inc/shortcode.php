<?php

/**
 * 学校検索フォームを出力するショートコード
 */
add_shortcode( 'kouka_school_search', function () {

	$html = <<<HTML
	<form role="search" method="get" class="p-search-form" action="https://kouka.local/">
	<label class="screen-reader-text" for="s">検索</label>
	<div class="c-input-group">
	<div class="c-input-group__field">
	<input type="hidden" name="post_type" value="school">
	<input type="search" placeholder="学校名を入力してください" value="" name="s">
	</div>
	<button class="c-input-group__btn">検索</button>
	</div>
	</form>	
HTML;

	return $html;
} );

/**
 * 都道府県タームの select フォームを出力するショートコード
 */
add_shortcode( 'kouka_prefecture_select', function () {
	$html = '<span class="c-select" aria-selected="false">';
	$html .= '<select id="select_prefecture">';
	$html .= sprintf( '<option value="">都道府県を選択してください</option>' );
	foreach ( kouka_term_prefectures() as $_slug ) {
		$_term = get_term_by( 'slug', $_slug, 'prefecture' );
		if ( ! $_term ) {
			continue;
		}
		if ( ! $_term->count ) {
			continue;
		}
		$html .= sprintf( '<option value="%s">%s（%s）</option>', $_slug, $_term->name, $_term->count );
	}
	$html .= '</select>';
	$html .= '<span class="c-select__label"></span>';
	$html .= '</span>';

	$archive_url = home_url( '/prefecture/' );
	$html        .= <<<JS
<script>	
(function($) {
	$('#select_prefecture').change(function(){
		if(!$(this).val()){
			return false; 
		}
		console.log($(this).val());
		document.location.href = '{$archive_url}' + $(this).val();
	});
})(jQuery);
</script>
JS;

	return $html;
} );

/**
 * 頭文字タームの select フォームを出力するショートコード
 */
add_shortcode( 'kouka_initial_select', function () {

	$html = '<table class="wp-block-table has-fixed-layout">';
	$html .= '<tbody>';

	$prev_key = '';

	foreach ( kouka_term_initials() as $_initial ) {
		$_key  = $_initial[0];
		$_slug = $_initial[1];

		if ( $prev_key != $_key ) {
			if ( $prev_key ) {
				$html .= '</tr>';
			}
			$html     .= '<tr>';
			$prev_key = $_key;
		}

		$_count = 0;
		$_name  = '';
		if ( $_slug ) {
			$_term  = get_term_by( 'slug', $_slug, 'initial' );
			$_name  = $_term->name ?: '';
			$_count = $_term->count ?: '';
		}
		$archive_url = home_url( '/initial/' ) . $_slug;
		if ( $_count && $_name ) {
			$html .= sprintf( '<td class="registerd"><a href="%s">%s</a>（%s）</td>', $archive_url, $_term->name, $_term->count );
		} else if ( ! $_name ) {
			$html .= '<td class="nothing">&nbsp;</td>';
		} else {
			$html .= sprintf( '<td class="unregisterd">%s</td>', $_name );
		}
	}

	$html .= '</tr>';
	$html .= '</tbody>';
	$html .= '</table>';

	return $html;
} );

/**
 * 作詞者タグクラウドを出力するショートコード
 */
add_shortcode( 'kouka_lyricist_tags', function () {
	if ( ! $lyricists = get_categories( [ 'taxonomy' => 'lyricist' ] ) ) {
		return;
	}

	$html = <<<HTML
<div class="c-input-group__field">
<input type="text" placeholder="作詞者の名前を入力してください" value="" id="lyricist" name="lyricist" class="c-form-control">
</div>
HTML;

	$html .= '<div class="c-entry-tags">';

	foreach ( $lyricists as $row ) {
		$html .= sprintf( '<a href="%s" class="tag-cloud-link lyricist-tag">%s</a></td>', get_term_link( $row ), $row->name );
	}

	$html .= '</div>';

	return $html;
} );

/**
 * 作曲者タグクラウドを出力するショートコード
 */
add_shortcode( 'kouka_composer_tags', function () {
	if ( ! $lyricists = get_categories( [ 'taxonomy' => 'composer' ] ) ) {
		return;
	}

	$html = <<<HTML
<div class="c-input-group__field">
<input type="text" placeholder="作曲者の名前を入力してください" value="" id="composer" name="composer" class="c-form-control">
</div>
HTML;

	$html .= '<div class="c-entry-tags">';

	foreach ( $lyricists as $row ) {
		$html .= sprintf( '<a href="%s" class="tag-cloud-link composer-tag">%s</a></td>', get_term_link( $row ), $row->name );
	}

	$html .= '</div>';

	return $html;
} );
