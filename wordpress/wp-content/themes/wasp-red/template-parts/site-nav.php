<?php
defined( 'ABSPATH' ) || exit;
?>
<header class="site-header">
	<div class="header-inner">
		<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="logo-light" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-light.png' ); ?>" alt="wasp.red">
		</a>
		<button type="button" class="nav-toggle" id="wr-nav-toggle" aria-expanded="false" aria-controls="wr-nav" aria-label="Otwórz menu">
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
		</button>
		<nav class="nav" id="wr-nav">
			<a href="<?php echo esc_url( home_url( '/funkcje/' ) ); ?>" class="nav-link">Funkcje</a>
			<a href="<?php echo esc_url( home_url( '/dla-kogo/' ) ); ?>" class="nav-link">Dla kogo</a>
			<a href="<?php echo esc_url( home_url( '/prywatnosc/' ) ); ?>" class="nav-link">Prywatność</a>
			<a href="<?php echo esc_url( home_url( '/o-projekcie/' ) ); ?>" class="nav-link">O projekcie</a>
			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="nav-link">Kontakt</a>
		</nav>
		<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-red btn--sm">Wczesny dostęp</a>
	</div>
</header>
