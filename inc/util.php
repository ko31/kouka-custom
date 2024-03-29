<?php
/**
 * Get term name.
 *
 * @param $post_id
 * @param $taxonomy
 *
 * @return string
 */
function kouka_term_name( $post_id, $taxonomy ) {
	$terms = get_the_terms( $post_id, $taxonomy );
	if ( $terms ) {
		return $terms[0]->name;
	}

	return '';
}

/**
 * Get term prefecture slugs.
 *
 * @return array
 */
function kouka_term_prefectures() {
	return [
		hokkaido,
		aomori,
		iwate,
		miyagi,
		akita,
		yamagata,
		fukushima,
		ibaraki,
		tochigi,
		gunma,
		saitama,
		chiba,
		tokyo,
		kanagawa,
		niigata,
		toyama,
		ishikawa,
		fukui,
		yamanashi,
		nagano,
		gifu,
		shizuoka,
		aichi,
		mie,
		shiga,
		kyoto,
		osaka,
		hyogo,
		nara,
		wakayama,
		tottori,
		shimane,
		okayama,
		hiroshima,
		yamaguchi,
		tokushima,
		kagawa,
		ehime,
		kochi,
		fukuoka,
		saga,
		nagasaki,
		kumamoto,
		oita,
		miyazaki,
		kagoshima,
		okinawa,
	];
}

/**
 * Get term initial slugs.
 *
 * @return array
 */
function kouka_term_initials() {
	return [
		[ 'あ', 'a' ],
		[ 'あ', 'i' ],
		[ 'あ', 'u' ],
		[ 'あ', 'e' ],
		[ 'あ', 'o' ],
		[ 'か', 'ka' ],
		[ 'か', 'ki' ],
		[ 'か', 'ku' ],
		[ 'か', 'ke' ],
		[ 'か', 'ko' ],
		[ 'さ', 'sa' ],
		[ 'さ', 'shi' ],
		[ 'さ', 'su' ],
		[ 'さ', 'se' ],
		[ 'さ', 'so' ],
		[ 'た', 'ta' ],
		[ 'た', 'chi' ],
		[ 'た', 'tsu' ],
		[ 'た', 'te' ],
		[ 'た', 'to' ],
		[ 'な', 'na' ],
		[ 'な', 'ni' ],
		[ 'な', 'nu' ],
		[ 'な', 'ne' ],
		[ 'な', 'no' ],
		[ 'は', 'ha' ],
		[ 'は', 'hi' ],
		[ 'は', 'hu' ],
		[ 'は', 'he' ],
		[ 'は', 'ho' ],
		[ 'ま', 'ma' ],
		[ 'ま', 'mi' ],
		[ 'ま', 'mu' ],
		[ 'ま', 'me' ],
		[ 'ま', 'mo' ],
		[ 'や', 'ya' ],
		[ 'や', '' ],
		[ 'や', 'yu' ],
		[ 'や', '' ],
		[ 'や', 'yo' ],
		[ 'ら', 'ra' ],
		[ 'ら', 'ri' ],
		[ 'ら', 'ru' ],
		[ 'ら', 're' ],
		[ 'ら', 'ro' ],
		[ 'わ', 'wa' ],
		[ 'わ', 'wo' ],
		[ 'わ', 'n' ],
		[ 'わ', '' ],
		[ 'わ', '' ],
	];
}

/**
 * Detect if current page has table of contents.
 *
 * @return bool
 */
function kouka_has_table_of_contents() {
	if ( is_singular( 'blog' ) ) {
		return true;
	}

	if ( is_single() ) {
		return true;
	}

	return false;
}

/**
 * Get default image.
 *
 * @param $type
 *
 * @return bool
 */
function kouka_default_image( $type ) {
	$image = '';

	switch ( $type ) {
		case 'elementary':
			$image = plugins_url( 'assets/img/default_school_elementary.jpg', 'kouka-custom/kouka-custom.php' );
			break;
		case 'junior':
			$image = plugins_url( 'assets/img/default_school_junior.jpg', 'kouka-custom/kouka-custom.php' );
			break;
		case 'senior':
			$image = plugins_url( 'assets/img/default_school_senior.jpg', 'kouka-custom/kouka-custom.php' );
			break;
		case 'university':
			$image = plugins_url( 'assets/img/default_school_university.jpg', 'kouka-custom/kouka-custom.php' );
			break;
		default:
			break;
	}

	return $image;
}


