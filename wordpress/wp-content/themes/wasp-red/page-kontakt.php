<?php
/**
 * Page Template: Kontakt — treść z www/main/kontakt.html.
 *
 * Formularz "wczesny dostęp" niżej jest 1:1 z oryginałem — bez <form> i bez
 * realnej wysyłki, tak samo jak na front-page.php. Podłączenie wtyczki
 * formularzy (Fluent Forms/CF7) + SMTP to osobny, kolejny krok planu.
 */
defined( 'ABSPATH' ) || exit;

get_header( null, [
	'title'       => 'Kontakt i wczesny dostęp — wasp.red',
	'description' => 'Zapisz się na wczesny dostęp do wasp.red i sprawdź najczęściej zadawane pytania o aplikację.',
] );
?>
    <section class="on-dark">
        <div class="wr-kon-01">
            <div>
                <div class="eyebrow-light">Wczesny dostęp</div>
                <h1 class="h-hero-lg">Zbudujmy to z ludźmi, którzy realnie strzelają</h1>
                <p class="lead lead--onDark wr-kon-03">Zostaw adres i wejdź do pierwszej grupy testowej. Dostajesz
                    aplikację przed premierą i realny wpływ na to, które statystyki powstaną najpierw. Bez newslettera
                    przy okazji, bez przekazywania adresu komukolwiek.</p>
                <div class="wr-kon-04">
                    <div class="row-gap-12-baseline"><span class="label-accent-light">01</span><span
                            class="text-16-relaxed">Aplikacja w rękach przed publikacją w sklepach</span></div>
                    <div class="row-gap-12-baseline"><span class="label-accent-light">02</span><span
                            class="text-16-relaxed">Głos w tym, które analizy powstaną najpierw</span></div>
                    <div class="row-gap-12-baseline"><span class="label-accent-light">03</span><span
                            class="text-16-relaxed">Wgląd w regulamin i politykę prywatności przed premierą</span></div>
                </div>
            </div>
            <div class="wr-kon-05">
                <div class="stack-12">
                    <label class="field"><span class="text-sm-bold">Adres e-mail</span><input
                            class="field-input wr-idx-189" type="email" placeholder="jan@przyklad.pl"></label>
                    <label class="field"><span class="text-sm-bold">Jak strzelasz?</span><select
                            class="field-input card--white">
                        <option>Sportowo, konkurencje statyczne</option>
                        <option>Sportowo, konkurencje dynamiczne</option>
                        <option>Rekreacyjnie, klubowo</option>
                        <option>Myślistwo</option>
                        <option>Klub lub instruktor</option>
                        <option>Służby, szkolenia</option>
                    </select></label>
                    <label class="field"><span class="text-sm-bold">Czego brakuje Ci najbardziej? <span
                            class="wr-kon-06">opcjonalnie</span></span><textarea class="field-input wr-kon-07" rows="3"
                                                                                 placeholder="np. porównanie dwóch rodzajów amunicji na tym samym dystansie"></textarea></label>
                    <label class="wr-idx-191"><input class="wr-idx-192" type="checkbox"><span>Zgadzam się na kontakt w sprawie testów wasp.red. Adres nie zostanie nikomu przekazany.</span></label>
                    <button class="btn-red btn--submit">Dopisz mnie do listy</button>
                    <div class="wr-idx-193">Prace nad wasp.red trwają od marca 2025<br>Premiera nie została jeszcze
                        ogłoszona
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section" id="faq">
        <div class="section-inner">
            <div class="eyebrow">Pytania i odpowiedzi</div>
            <h2 class="h-section wr-kon-08">O to pytają najczęściej</h2>
            <div class="wr-kon-09">
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Czy aplikacja jest już w sklepach?</div>
                    <div class="body-muted-lg">Jeszcze nie. Wasp.red jest w fazie prac rozwojowych, a wczesny dostęp to
                        jedyna droga, żeby dostać aplikację do rąk przed premierą.
                    </div>
                </div>
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Jak dokładne jest rozpoznawanie przestrzelin?</div>
                    <div class="body-muted-lg">Nie podajemy jeszcze liczb i nie zamierzamy ich wymyślać. Skuteczność
                        weryfikujemy w testach z użytkownikami i opublikujemy ją, gdy będzie oparta o realne tarcze.
                    </div>
                </div>
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Czy potrzebuję internetu na strzelnicy?</div>
                    <div class="body-muted-lg">Nie. Rozpoznawanie tarczy, dziennik, statystyki, szafa i timer działają
                        offline. Sieci potrzebujesz wyłącznie do kopii w chmurze i funkcji klubowych.
                    </div>
                </div>
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Czy muszę zakładać konto?</div>
                    <div class="body-muted-lg">Nie. Instalujesz i strzelasz. Konto zakładasz tylko wtedy, gdy sam
                        zechcesz włączyć tryb online.
                    </div>
                </div>
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Jakie tarcze są obsługiwane?</div>
                    <div class="body-muted-lg">Model rozpoznaje typ tarczy sam, bez wybierania z listy. Zakres wzorów
                        rozszerzamy w trakcie prac, a zgłoszenia z wczesnego dostępu ustawiają kolejność.
                    </div>
                </div>
                <div class="card card--p28 card--r18">
                    <div class="card-title-lg">Czy sprzedajecie moje dane?</div>
                    <div class="body-muted-lg">Nie. Ani danych, ani metadanych, ani profili do targetowania. Szczegóły
                        znajdziesz na stronie <a href="<?php echo esc_url( home_url( '/prywatnosc/' ) ); ?>">Prywatność i dane</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wr-kon-10">
        <div class="card card--white card--p32 card--r20">
            <div class="tile-eyebrow">Ogólnie</div>
            <div class="card-title">Pytania o aplikację</div>
            <a class="text-16" href="mailto:kontakt@wasp.red">kontakt@wasp.red</a></div>
        <div class="card card--white card--p32 card--r20">
            <div class="tile-eyebrow">Kluby</div>
            <div class="card-title">Kluby i instruktorzy</div>
            <a class="text-16" href="mailto:kluby@wasp.red">kluby@wasp.red</a></div>
        <div class="card card--white card--p32 card--r20">
            <div class="tile-eyebrow">Partnerzy</div>
            <div class="card-title">Współpraca i media</div>
            <a class="text-16" href="mailto:partnerzy@wasp.red">partnerzy@wasp.red</a></div>
    </section>
<?php get_footer(); ?>
