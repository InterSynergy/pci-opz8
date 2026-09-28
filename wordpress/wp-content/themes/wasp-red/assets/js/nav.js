/**
 * Toggle menu mobilnego (#wr-nav-toggle / #wr-nav) — bez zaleznosci,
 * tylko klasa .is-open i aria-expanded. Patrz assets/css/styles.css,
 * blok "Menu mobilne", @media (max-width:720px).
 */
(function () {
	var toggle = document.getElementById( 'wr-nav-toggle' );
	var nav = document.getElementById( 'wr-nav' );

	if ( ! toggle || ! nav ) {
		return;
	}

	function closeNav() {
		nav.classList.remove( 'is-open' );
		toggle.setAttribute( 'aria-expanded', 'false' );
	}

	function openNav() {
		nav.classList.add( 'is-open' );
		toggle.setAttribute( 'aria-expanded', 'true' );
	}

	toggle.addEventListener( 'click', function () {
		if ( nav.classList.contains( 'is-open' ) ) {
			closeNav();
		} else {
			openNav();
		}
	} );

	document.addEventListener( 'keydown', function ( e ) {
		if ( e.key === 'Escape' ) {
			closeNav();
		}
	} );

	document.addEventListener( 'click', function ( e ) {
		if ( ! nav.classList.contains( 'is-open' ) ) {
			return;
		}
		if ( nav.contains( e.target ) || toggle.contains( e.target ) ) {
			return;
		}
		closeNav();
	} );

	// Zamknij panel po kliknieciu linku (np. kotwica #faq na tej samej stronie,
	// gdzie nie nastapi pelne przeladowanie).
	nav.addEventListener( 'click', function ( e ) {
		if ( e.target.closest( 'a' ) ) {
			closeNav();
		}
	} );
} )();
