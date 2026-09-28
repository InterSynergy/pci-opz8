/**
 * Formularz "wczesny dostep" (.wr-early-form, patrz template-parts/
 * early-access-form.php) - przed prawdziwym submitem pobiera token
 * reCAPTCHA i wpisuje go do ukrytego pola wr_recaptcha_token.
 *
 * Jesli grecaptcha z jakiegos powodu sie nie zaladuje (blokada, offline,
 * klucz nieaktywny na danej domenie), formularz i tak sie wysyla - bez
 * tokenu. Serwer (functions.php -> wasp_red_verify_recaptcha) i tak
 * pomija weryfikacje, dopoki sekret nie jest skonfigurowany; gdy juz
 * bedzie, brak tokenu = odrzucone zgloszenie.
 */
(function () {
	function attachRecaptcha( form ) {
		form.addEventListener( 'submit', function ( e ) {
			if ( '1' === form.dataset.wrSubmitting ) {
				return; // token juz wpisany, pozwol na prawdziwy submit
			}

			if ( typeof grecaptcha === 'undefined' || ! window.waspRedRecaptcha ) {
				return; // brak recaptcha - wysylamy bez tokenu
			}

			e.preventDefault();

			function submitNow( token ) {
				var field = form.querySelector( '[name="wr_recaptcha_token"]' );
				if ( field && token ) {
					field.value = token;
				}
				form.dataset.wrSubmitting = '1';
				form.submit();
			}

			try {
				grecaptcha.enterprise.ready( function () {
					grecaptcha.enterprise
						.execute( window.waspRedRecaptcha.siteKey, { action: 'early_access' } )
						.then( submitNow )
						.catch( function () {
							submitNow( '' );
						} );
				} );
			} catch ( err ) {
				submitNow( '' );
			}
		} );
	}

	document.querySelectorAll( '.wr-early-form' ).forEach( attachRecaptcha );
} )();
