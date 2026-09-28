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
                jednymi z wrażliwszych, jakie masz w telefonie. Dlatego rdzeń wasp.red pracuje lokalnie na urządzeniu, a
                synchronizację z chmurą włączasz sam — albo nigdy. Konto jest potrzebne do potwierdzenia płatności za
                licencję, nie do korzystania z danych.</p>
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
            <div class="h3 h3--sm">Konto konieczne do płatności</div>
            <div class="body-muted-lg">Konto jest potrzebne do potwierdzenia płatności za licencję wasp.red. To nie
                jest zgoda na wysyłanie danych — chmurę i funkcje klubowe włączasz sam, kiedy zechcesz.
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
                    <div class="mono-note-dark">tryb offline · dane na urządzeniu</div>
                    <div class="list-stack">
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Wykrywanie tarczy i
                            przestrzelin
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Analizy i statystyki</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Wirtualna szafa i amunicja
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Śledzenie treningów</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Odznaki</div>
                    </div>
                </div>
                <div class="card card--dark card--p32 card--r20">
                    <div class="stat-num stat-num--md">Połączenie z chmurą</div>
                    <div class="mono-note-dark">tryb online · włączasz go sam</div>
                    <div class="list-stack">
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Kopia danych w chmurze</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Statystyki w przeglądarce</div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Znajomi i wirtualne kluby
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Zawody między użytkownikami
                        </div>
                        <div class="row-gap-12"><span class="text-accent-light">—</span>Udostępnianie wyników</div>
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
                audyty, zanim udostępnimy wasp.red szerokiej grupie. Wynik opiszemy publicznie.</p>
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
        </div>
    </section>

    <section class="wr-idx-183">
        <div class="wr-fun-42">
            <div>
                <h2 class="h-subsection h-subsection--sm wr-fun-43">Chcesz wiedzieć więcej, zanim się zapiszesz?</h2>
                <p class="p-body p-body--onDarkStrong wr-fun-44">Pełna, wiążąca klauzula RODO i polityka prywatności
                    trafią na stronę przed premierą — osoby z wczesnego dostępu zobaczą je jako pierwsze.</p>
            </div>
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-invert">Zapisz się</a>
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
