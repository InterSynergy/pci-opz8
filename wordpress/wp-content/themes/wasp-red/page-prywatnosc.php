<?php
/**
 * Page Template: Prywatność — treść z www/main/prywatnosc.html.
 */
defined( 'ABSPATH' ) || exit;

get_header( null, [
	'title'       => 'Prywatność i dane — wasp.red',
	'description' => 'Rdzeń wasp.red działa offline i lokalnie na urządzeniu. Nie sprzedajemy danych ani metadanych użytkowników.',
] );
?>
    <section class="on-dark">
        <div class="hero-inner">
            <div class="eyebrow-light">Prywatność i dane</div>
            <h1 class="h-hero-lg wr-pry-01">Twoje dane zostają u Ciebie. Bez gwiazdki.</h1>
            <p class="lead lead--onDark">Informacje o posiadanej broni, treningach i odwiedzanych strzelnicach są
                jednymi z wrażliwszych, jakie masz w telefonie. Dlatego rdzeń wasp.red pracuje lokalnie, a tryb online
                włączasz sam — albo nigdy. Aplikacja działa w pełni w obu przypadkach.</p>
        </div>
    </section>

    <section class="wr-pry-02">
        <div class="card card--white card--p32 card--r20">
            <div class="h3 h3--sm">Nie sprzedajemy danych</div>
            <div class="body-muted-lg">Ani danych, ani metadanych, ani profili do targetowania. Twój dziennik nie jest
                towarem i nie zbudujemy na nim modelu przychodów.
            </div>
        </div>
        <div class="card card--white card--p32 card--r20">
            <div class="h3 h3--sm">AI działa na urządzeniu</div>
            <div class="body-muted-lg">Model rozpoznaje tarczę w telefonie. Zdjęcia nie muszą nigdzie wyjeżdżać, żeby
                policzyć wynik — działa to również w miejscu bez zasięgu.
            </div>
        </div>
        <div class="card card--white card--p32 card--r20">
            <div class="h3 h3--sm">Konto jest opcjonalne</div>
            <div class="body-muted-lg">Instalujesz i strzelasz — bez rejestracji, bez maila, bez zgód. Konto zakładasz
                tylko wtedy, gdy sam zechcesz kopię w chmurze albo funkcje klubowe.
            </div>
        </div>
    </section>

    <section class="on-dark">
        <div class="section-inner">
            <h2 class="h-section wr-pry-03">Dokładnie wiesz, co zostaje w telefonie</h2>
            <p class="p-body on-dark-muted wr-pry-04">Pokazujemy tę granicę przed instalacją, a nie w regulaminie po
                fakcie.</p>
            <div class="wr-pry-05">
                <div class="card card--dark card--p32 card--r20">
                    <div class="stat-num stat-num--md">Zostaje lokalnie</div>
                    <div class="mono-note-dark">tryb offline · bez konta</div>
                    <div class="list-stack">
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Zdjęcia tarcz i wykrywanie
                            przestrzelin
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Dziennik treningów i statystyki
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Wirtualna szafa i stan amunicji
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Timer i odznaki</div>
                    </div>
                </div>
                <div class="card card--dark card--p32 card--r20">
                    <div class="stat-num stat-num--md">Wyjeżdża tylko na Twoją zgodę</div>
                    <div class="mono-note-dark">tryb online · konto włączasz sam</div>
                    <div class="list-stack">
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Kopia dziennika w chmurze</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Statystyki w przeglądarce</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Znajomi, kluby, zawody</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Udostępnianie wybranych wyników
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wr-opr-20">
        <div>
            <div class="eyebrow">Bezpieczeństwo</div>
            <h2 class="h-subsection h-subsection--md h2">Bezpieczeństwo jest funkcją produktu, nie załącznikiem do
                regulaminu</h2>
            <p class="p-body p-body--ink wr-fun-38">Zarówno warstwa offline, jak i online przechodzą przez zewnętrzne
                audyty, zanim tryb online udostępnimy szerokiej grupie. Wynik opiszemy publicznie.</p>
        </div>
        <div class="stack-12">
            <div class="card card--white card--p24">
                <div class="tile-title-sm">Szyfrowanie danych</div>
                <div class="body-muted">W spoczynku i w transmisji, w obu trybach pracy aplikacji — bez wyjątków.</div>
            </div>
            <div class="card card--white card--p24">
                <div class="tile-title-sm">Redundancja infrastruktury</div>
                <div class="body-muted">Kopia dziennika ma sens tylko wtedy, gdy nie ginie razem z jednym serwerem.
                </div>
            </div>
            <div class="card card--white card--p24">
                <div class="tile-title-sm">Audyty zewnętrzne</div>
                <div class="body-muted">Zaplanowane przed szerokim udostępnieniem trybu online. Wynik trafi na tę
                    stronę.
                </div>
            </div>
            <div class="card card--white card--p24">
                <div class="tile-title-sm">Eksport i usunięcie danych</div>
                <div class="body-muted">Dziennik jest Twój: wyeksportujesz go w każdej chwili albo usuniesz trwale razem
                    z kontem.
                </div>
            </div>
        </div>
    </section>

    <section class="section-divider-top">
        <div class="wr-pry-06">
            <p class="wr-pry-07">Ta strona opisuje założenia projektu na etapie prac rozwojowych. Wiążąca polityka
                prywatności i regulamin zostaną opublikowane przed premierą aplikacji i udostępnione osobom z wczesnego
                dostępu do wglądu wcześniej.</p>
        </div>
    </section>
<?php get_footer(); ?>
