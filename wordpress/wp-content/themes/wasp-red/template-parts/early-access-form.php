<?php
/**
 * Formularz "wczesny dostęp" — wspólny dla SG (#early) i /kontakt/.
 *
 * $args['source']       'sg' | 'kontakt' — trafia do maila powiadomienia,
 *                        żeby wiedzieć, skąd przyszło zgłoszenie.
 * $args['button_class'] klasa koloru przycisku — na SG byl 'btn-dark',
 *                        na Kontakcie 'btn-red'; zachowujemy tę różnicę.
 *
 * Obsługa: functions.php -> wasp_red_handle_early_access() (admin-post.php,
 * wp_mail() na info@wasp.red, bez maila potwierdzającego do zgłaszającego).
 */
defined( 'ABSPATH' ) || exit;

$source       = $args['source'] ?? 'sg';
$button_class = $args['button_class'] ?? 'btn-red';

$sent  = isset( $_GET['wr_sent'] ) && '1' === $_GET['wr_sent'];
$error = isset( $_GET['wr_error'] );
?>
<div class="stack-12">
	<?php if ( $sent ) : ?>
		<div class="wr-form-success">
			<div class="h3 h3--md">Dziękujemy za zainteresowanie wasp.red</div>
			<div class="body-muted">pozostajemy w kontakcie.</div>
		</div>
	<?php else : ?>
		<?php if ( $error ) : ?>
			<div class="wr-form-error">Coś poszło nie tak — sprawdź adres e-mail i zaznacz zgodę na przetwarzanie danych, a potem spróbuj ponownie.</div>
		<?php endif; ?>
		<form class="wr-early-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="wasp_red_early_access">
			<input type="hidden" name="wr_source" value="<?php echo esc_attr( $source ); ?>">
			<input type="hidden" name="wr_recaptcha_token" value="">
			<?php wp_nonce_field( 'wasp_red_early_access', 'wr_nonce' ); ?>
			<div class="wr-honeypot" aria-hidden="true">
				<label>Zostaw to pole puste<input type="text" name="wr_website" tabindex="-1" autocomplete="off"></label>
			</div>
			<label class="field"><span class="text-sm-bold">Adres e-mail</span><input
					class="field-input" type="email" name="wr_email" required placeholder="jan@przyklad.pl"></label>
			<label class="field"><span class="text-sm-bold">Jak strzelasz?</span><select
					class="field-input card--white" name="wr_style">
				<option>Sportowo, konkurencje statyczne</option>
				<option>Sportowo, konkurencje dynamiczne</option>
				<option>Rekreacyjnie, klubowo</option>
				<option>Klub lub instruktor</option>
				<option>Służby, szkolenia</option>
			</select></label>
			<label class="field"><span class="text-sm-bold">Czego brakuje Ci najbardziej? <span
					class="field-optional-label">opcjonalnie</span></span><textarea class="field-input" rows="3"
					name="wr_notes"
					placeholder="np. porównanie dwóch rodzajów amunicji na tym samym dystansie"></textarea></label>
			<label class="wr-idx-191"><input class="wr-idx-192" type="checkbox" name="wr_consent" required><span>Szczegółowe informacje dotyczące przetwarzania danych osobowych i klauzula informacyjna RODO znajdują się pod adresem: <a href="<?php echo esc_url( home_url( '/polityka-prywatnosci/' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( home_url( '/polityka-prywatnosci/' ) ); ?></a>. Administratorem danych osobowych jest Marcin Stelmaszczuk. Zapoznałem/am się z klauzulą informacyjną RODO i zgadzam się na przetwarzanie moich danych osobowych.</span></label>
			<button class="<?php echo esc_attr( $button_class ); ?> btn--submit" type="submit">Dopisz mnie do listy</button>
			<?php // Wymagane przez Google, gdy pływający badge reCAPTCHA jest ukryty (.grecaptcha-badge w styles.css). ?>
			<div class="wr-recaptcha-note">Formularz jest chroniony przez reCAPTCHA — obowiązują
				<a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Polityka prywatności</a> i
				<a href="https://policies.google.com/terms" target="_blank" rel="noopener">Warunki korzystania z usług</a> Google.
			</div>
			<div class="wr-idx-193">Prace nad wasp.red trwają od marca 2025<br>Premiera aplikacji nie została
				jeszcze ogłoszona
			</div>
		</form>
	<?php endif; ?>
</div>
