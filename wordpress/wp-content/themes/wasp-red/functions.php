<?php
defined( 'ABSPATH' ) || exit;

/**
 * Klucz witryny reCAPTCHA Enterprise — publiczny z założenia (ląduje w HTML
 * każdej strony z formularzem), bezpieczny w kodzie motywu.
 *
 * Sekret do weryfikacji server-side (WASP_RED_RECAPTCHA_SECRET) NIE jest tu
 * trzymany — definiuje się go w wp-config.php (poza repo, tak jak zmienne
 * DB i SSH w .env), np.: define( 'WASP_RED_RECAPTCHA_SECRET', '...' );
 * Dopóki ta stała nie istnieje, weryfikacja reCAPTCHA jest pomijana (patrz
 * wasp_red_verify_recaptcha()) — formularz działa od razu, ochrona
 * antyspamowa dogrywa się bez zmian w motywie, gdy sekret zostanie dodany.
 */
define( 'WASP_RED_RECAPTCHA_SITE_KEY', '6Le4qMwtAAAAAB-sLdLFlMM26CuUNdVktK2p_af7' );

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

	wp_enqueue_script(
		'wasp-red-nav',
		$theme_uri . '/assets/js/nav.js',
		[],
		filemtime( $theme_dir . '/assets/js/nav.js' ),
		true
	);

	// Formularz "wczesny dostęp" siedzi tylko na SG i na /kontakt/.
	if ( is_front_page() || is_page( 'kontakt' ) ) {
		wp_enqueue_script(
			'wasp-red-recaptcha',
			'https://www.google.com/recaptcha/enterprise.js?render=' . WASP_RED_RECAPTCHA_SITE_KEY,
			[],
			null,
			true
		);

		wp_enqueue_script(
			'wasp-red-early-access-form',
			$theme_uri . '/assets/js/early-access-form.js',
			[],
			filemtime( $theme_dir . '/assets/js/early-access-form.js' ),
			true
		);

		wp_localize_script( 'wasp-red-early-access-form', 'waspRedRecaptcha', [
			'siteKey' => WASP_RED_RECAPTCHA_SITE_KEY,
		] );
	}

	$page_styles = [
		'funkcje'              => 'funkcje.css',
		'dla-kogo'             => 'dla-kogo.css',
		'prywatnosc'           => 'prywatnosc.css',
		'o-projekcie'          => 'o-projekcie.css',
		'kontakt'              => 'kontakt.css',
		'polityka-prywatnosci' => 'polityka-prywatnosci.css',
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

/**
 * Obsługa formularza "wczesny dostęp" (SG #early + /kontakt/) —
 * zwykłe wp_mail() (owija PHP mail(), bez SMTP — tak ustalone z klientem),
 * bez maila potwierdzającego do zgłaszającego. Markup formularza:
 * template-parts/early-access-form.php.
 */
add_action( 'admin_post_wasp_red_early_access', 'wasp_red_handle_early_access' );
add_action( 'admin_post_nopriv_wasp_red_early_access', 'wasp_red_handle_early_access' );

function wasp_red_handle_early_access() {
	$redirect_to = wp_get_referer() ?: home_url( '/' );
	$redirect_to = remove_query_arg( [ 'wr_sent', 'wr_error' ], $redirect_to );

	// Honeypot — pole niewidoczne dla ludzi (patrz .wr-honeypot w styles.css),
	// boty formularzowe czesto je wypełniają. Cichy "sukces", bez informowania bota.
	if ( ! empty( $_POST['wr_website'] ) ) {
		wp_safe_redirect( add_query_arg( 'wr_sent', '1', $redirect_to ) . '#early' );
		exit;
	}

	if ( ! isset( $_POST['wr_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['wr_nonce'] ), 'wasp_red_early_access' ) ) {
		wp_die( esc_html__( 'Nieprawidłowe żądanie — odśwież stronę i spróbuj ponownie.', 'wasp-red' ), 400 );
	}

	$email           = isset( $_POST['wr_email'] ) ? sanitize_email( wp_unslash( $_POST['wr_email'] ) ) : '';
	$style           = isset( $_POST['wr_style'] ) ? sanitize_text_field( wp_unslash( $_POST['wr_style'] ) ) : '';
	$notes           = isset( $_POST['wr_notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['wr_notes'] ) ) : '';
	$consent         = ! empty( $_POST['wr_consent'] );
	$source          = isset( $_POST['wr_source'] ) ? sanitize_text_field( wp_unslash( $_POST['wr_source'] ) ) : '';
	$recaptcha_token = isset( $_POST['wr_recaptcha_token'] ) ? sanitize_text_field( wp_unslash( $_POST['wr_recaptcha_token'] ) ) : '';

	if ( ! is_email( $email ) || ! $consent || ! wasp_red_verify_recaptcha( $recaptcha_token ) ) {
		wp_safe_redirect( add_query_arg( 'wr_error', '1', $redirect_to ) . '#early' );
		exit;
	}

	$subject = 'Nowe zgłoszenie – wczesny dostęp wasp.red';
	$body    = "Nowe zgłoszenie do wczesnego dostępu wasp.red\n\n"
		. 'E-mail: ' . $email . "\n"
		. 'Jak strzela: ' . ( $style ?: '—' ) . "\n"
		. 'Czego brakuje: ' . ( $notes ?: '—' ) . "\n"
		. 'Źródło zgłoszenia: ' . ( 'kontakt' === $source ? 'strona Kontakt' : 'strona główna' ) . "\n";

	// Jawny From — domyślny (z domeny witryny, np. wordpress@localhost w
	// dev) bywa odrzucany przez PHPMailer jako nieprawidłowy adres.
	$headers = [
		'From: wasp.red <info@wasp.red>',
		'Reply-To: ' . $email,
	];

	wp_mail( 'info@wasp.red', $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'wr_sent', '1', $redirect_to ) . '#early' );
	exit;
}

/**
 * Weryfikacja tokenu reCAPTCHA przez klasyczny endpoint siteverify
 * (secret + response) — działa dla kluczy zakładanych przez darmową konsolę
 * reCAPTCHA (g.co/recaptcha/admin), którą ma tutaj klient; NIE jest to
 * pełne Enterprise Assessment API (wymagałoby projektu GCP + API key).
 * Jeśli się okaże, że klucz jest "prawdziwym" kluczem Enterprise z Google
 * Cloud, ta funkcja będzie wymagała przepisania pod tamto API.
 *
 * Dopóki WASP_RED_RECAPTCHA_SECRET nie jest zdefiniowany (sekret jeszcze
 * nie dodany do wp-config.php), weryfikacja jest pomijana — formularz
 * wysyła zgłoszenia normalnie, tylko bez tej warstwy ochrony.
 */
function wasp_red_verify_recaptcha( $token ) {
	if ( ! defined( 'WASP_RED_RECAPTCHA_SECRET' ) || ! WASP_RED_RECAPTCHA_SECRET ) {
		return true;
	}

	if ( ! $token ) {
		return false;
	}

	$response = wp_remote_post( 'https://www.google.com/recaptcha/api/siteverify', [
		'timeout' => 10,
		'body'    => [
			'secret'   => WASP_RED_RECAPTCHA_SECRET,
			'response' => $token,
		],
	] );

	if ( is_wp_error( $response ) ) {
		return false;
	}

	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	return ! empty( $data['success'] ) && ( ! isset( $data['score'] ) || $data['score'] >= 0.5 );
}
