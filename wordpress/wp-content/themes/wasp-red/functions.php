<?php
defined( 'ABSPATH' ) || exit;

function wasp_red_setup() {
	// Bez 'title-tag' — <title> jest ręcznie renderowany w header.php
	// (get_header( null, ['title' => ...] )), żeby zachować oryginalne,
	// niestandardowe tytuły stron. add_theme_support('title-tag') dodałoby
	// przez wp_head() drugi, konkurencyjny <title>.
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wasp_red_setup' );

/**
 * Style wspólne zawsze, style per-strona tylko na właściwej stronie.
 *
 * Uwaga: nie sprawdzamy tego przez is_page_template() — ta funkcja patrzy
 * wyłącznie na metadane _wp_page_template (jawnie wybrany szablon w
 * Atrybutach strony), a nasze page-{slug}.php podpinają się automatycznie
 * po samym slugu, bez żadnej meta. Dlatego sprawdzamy wprost po slugu
 * strony przez is_page().
 */
function wasp_red_assets() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style(
		'wasp-red-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
		[],
		null
	);

	wp_enqueue_style(
		'wasp-red-styles',
		$theme_uri . '/assets/css/styles.css',
		[],
		filemtime( $theme_dir . '/assets/css/styles.css' )
	);

	$page_styles = [
		'funkcje'     => 'funkcje.css',
		'dla-kogo'    => 'dla-kogo.css',
		'prywatnosc'  => 'prywatnosc.css',
		'o-projekcie' => 'o-projekcie.css',
		'kontakt'     => 'kontakt.css',
	];

	$is_current = is_front_page() ? 'index.css' : null;

	foreach ( $page_styles as $slug => $file ) {
		if ( is_page( $slug ) ) {
			$is_current = $file;
			break;
		}
	}

	if ( ! $is_current ) {
		return;
	}

	$path = $theme_dir . '/assets/css/' . $is_current;

	if ( ! file_exists( $path ) ) {
		return;
	}

	wp_enqueue_style(
		'wasp-red-' . basename( $is_current, '.css' ),
		$theme_uri . '/assets/css/' . $is_current,
		[ 'wasp-red-styles' ],
		filemtime( $path )
	);
}
add_action( 'wp_enqueue_scripts', 'wasp_red_assets' );
