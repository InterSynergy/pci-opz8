<?php
defined( 'ABSPATH' ) || exit;
?>
	<footer class="site-footer">
		<div class="footer-grid">
			<div>
				<div class="mb-14"><img class="logo-light" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-light.png' ); ?>" alt="wasp.red"></div>
				<div class="footer-brand-desc">We All Shooters Platform<br>Android, iOS i interfejs www<br>Projekt w
					budowie · 2026
				</div>
			</div>
			<div class="footer-col">
				<div class="footer-col-label">Produkt</div>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/funkcje/' ) ); ?>">Funkcje</a>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/dla-kogo/' ) ); ?>">Dla kogo</a>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/prywatnosc/' ) ); ?>">Prywatność i dane</a>
			</div>
			<div class="footer-col">
				<div class="footer-col-label">Projekt</div>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/o-projekcie/' ) ); ?>">O projekcie</a>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Wczesny dostęp</a>
				<a class="on-dark-muted" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>#faq">Pytania i odpowiedzi</a>
			</div>
			<div class="footer-col">
				<div class="footer-col-label">Kontakt</div>
				<a class="on-dark-muted" href="mailto:kontakt@wasp.red">kontakt@wasp.red</a>
				<span class="footer-note">Strona informacyjna.<br>Nie prowadzimy sprzedaży<br>broni ani amunicji.</span>
			</div>
		</div>
		<?php get_template_part( 'template-parts/funding-banner' ); ?>
	</footer>
</div><!-- .page-wrap -->
<?php wp_footer(); ?>
</body>
</html>
