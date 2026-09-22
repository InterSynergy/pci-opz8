<?php
/**
 * Wspólny <head> + otwarcie <body> dla wszystkich szablonów.
 *
 * Każdy page-*.php woła:
 *   get_header( null, [ 'title' => '...', 'description' => '...' ] );
 * żeby zachować oryginalne, unikalne <title>/meta description per strona
 * (nie mają one wspólnego wzorca — strona główna ma osobny, marketingowy tytuł).
 */
defined( 'ABSPATH' ) || exit;

$title       = $args['title'] ?? get_bloginfo( 'name' );
$description = $args['description'] ?? get_bloginfo( 'description' );
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo esc_html( $title ); ?></title>
	<meta name="description" content="<?php echo esc_attr( $description ); ?>">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-dark.png' ); ?>" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page-wrap">
	<?php if ( is_front_page() ) : ?>
		<?php get_template_part( 'template-parts/funding-bar-top' ); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/site-nav' ); ?>
