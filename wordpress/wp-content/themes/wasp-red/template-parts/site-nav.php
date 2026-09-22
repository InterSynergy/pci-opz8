<?php
defined( 'ABSPATH' ) || exit;
?>
<header class="site-header">
	<div class="header-inner">
		<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="logo-dark" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-dark.png' ); ?>" alt="wasp.red">
		</a>
		<nav class="nav" id="wr-nav">
			<a href="<?php echo esc_url( home_url( '/funkcje/' ) ); ?>" class="nav-link">Funkcje</a>
			<a href="<?php echo esc_url( home_url( '/dla-kogo/' ) ); ?>" class="nav-link">Dla kogo</a>
			<a href="<?php echo esc_url( home_url( '/prywatnosc/' ) ); ?>" class="nav-link">Prywatność</a>
			<a href="<?php echo esc_url( home_url( '/o-projekcie/' ) ); ?>" class="nav-link">O projekcie</a>
			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="nav-link">Kontakt</a>
		</nav>
		<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-dark btn--sm">Wczesny dostęp</a>
	</div>
</header>
