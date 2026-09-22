<?php
/**
 * Fallback szablonu (wymagany przez WordPress). Wszystkie realne strony
 * serwisu mają własne, dedykowane szablony (front-page.php, page-*.php) —
 * ten plik obsłuży tylko przypadki poza nimi: 404, wyszukiwarkę, ewentualną
 * dodatkową Stronę bez przypisanego szablonu.
 */
defined( 'ABSPATH' ) || exit;

get_header( null, [
	'title'       => wp_get_document_title(),
	'description' => get_bloginfo( 'description' ),
] );
?>
	<section class="section-inner-lg">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="h-section"><?php the_title(); ?></h1>
				<div class="p-body p-body--ink"><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php else : ?>
			<h1 class="h-section">Nie znaleziono strony</h1>
			<p class="p-body p-body--ink">Sprawdź adres albo wróć na <a href="<?php echo esc_url( home_url( '/' ) ); ?>">stronę główną</a>.</p>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>
