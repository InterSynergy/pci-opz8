<?php
/**
 * Rozbudowana karta z logotypami finansowania i disclaimerem —
 * w oryginale w stopce, na każdej podstronie.
 */
defined( 'ABSPATH' ) || exit;
?>
<div class="funding-banner-wrap">
	<div class="funding-banner">
		<div class="funding-logos-row">
			<img class="funding-logo-feng" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/feng-logo-strip.png' ); ?>"
				alt="Fundusze Europejskie dla Nowoczesnej Gospodarki, Rzeczpospolita Polska, Dofinansowane przez Unię Europejską, PARP Grupa PFR">
			<span class="header-divider"></span>
			<img class="funding-logo-innostart" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/innostart-hub-polska.png' ); ?>" alt="InnoStart Hub Polska">
		</div>
		<div class="funding-divider"></div>
		<p class="funding-disclaimer">Projekt współfinansowany ze środków Europejskiego Funduszu Rozwoju
			Regionalnego w ramach programu Fundusze Europejskie dla Nowoczesnej Gospodarki 2021&#8211;2027.<br>#FunduszeEuropejskie
			#FunduszeUE</p>
	</div>
</div>
