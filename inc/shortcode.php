<?php

/**
 * 都道府県タームの select フォームを出力するショートコード
 */
add_shortcode( 'kouka_prefecture_select', function () {
	$html = '<select id="select_prefecture">';
	$html .= sprintf( '<option value="">選択してください</option>' );
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

	$archive_url = home_url( '/prefecture/' );
	$html .= <<<JS
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
