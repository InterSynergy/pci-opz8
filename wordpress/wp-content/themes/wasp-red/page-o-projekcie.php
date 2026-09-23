<?php
/**
 * Page Template: O projekcie — treść z www/main/o-projekcie.html.
 */
defined( 'ABSPATH' ) || exit;

get_header( null, [
	'title'       => 'O projekcie — wasp.red',
	'description' => 'WASP.red — projekt aplikacji mobilnej i webowej dla strzelców, w budowie od marca 2025 roku.',
] );
?>
    <section class="on-dark">
        <div class="wr-opr-01">
            <div>
                <div class="eyebrow-light">O projekcie</div>
                <h1 class="h-display wr-opr-02">WASP.red</h1>
                <p class="lead lead--onDark wr-opr-03">Strzelanie jest jedną z niewielu dyscyplin, w której wynik da się
                    zmierzyć co do punktu — a mimo to prawie nikt tych pomiarów nie zbiera. Budujemy platformę, która
                    robi to za strzelca: mobilnie, offline i bez ręcznego wpisywania. Prace trwają od marca 2025
                    roku.</p>
            </div>
            <div class="wr-opr-04">
                <div class="card card--dark card--p18-20 card--r14">Aplikacja mobilna · Android i iOS</div>
                <div class="card card--dark card--p18-20 card--r14">Interfejs webowy do analiz</div>
                <div class="card card--dark card--p18-20 card--r14">Model AI działający na urządzeniu</div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="section-inner">
            <h2 class="h-section wr-opr-05">Dlaczego to w ogóle powstaje</h2>
            <div class="wr-opr-06">
                <div>
                    <p class="p-body p-body--inkStrong wr-opr-07">Typowy trening: seria, podejście do tarczy, zalepienie
                        przestrzelin, powrót na stanowisko. Ocena na oko, a po wyjściu ze strzelnicy nie zostaje nic
                        poza wrażeniem — i tak przez cały sezon.</p>
                    <p class="p-body p-body--inkStrong wr-opr-08">Alternatywy są słabe: Excel ze zdjęciami w galerii,
                        który porzuca się po trzech treningach, drogi system elektroniczny przywiązany do jednej osi,
                        albo aplikacje liczące punkty bez AI, z siermiężnym interfejsem i bez warstwy społecznościowej.
                        Zostawiają dokładnie tę lukę, którą wypełniamy.</p>
                </div>
                <div class="wr-opr-09">
                    <div class="card card--p24">
                        <div class="tile-title-sm">Założenie pierwsze</div>
                        <div class="body-muted">Wprowadzenie danych musi kosztować jedno zdjęcie. Wszystko powyżej tego
                            progu użytkownik porzuci — i słusznie.
                        </div>
                    </div>
                    <div class="card card--p24">
                        <div class="tile-title-sm">Założenie drugie</div>
                        <div class="body-muted">Aplikacja musi działać bez internetu. Na strzelnicach zasięg bywa
                            fikcją, a dla części użytkowników chmura jest wykluczona z zasady.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-inner">
        <div class="eyebrow">Etap prac</div>
        <h2 class="h-section wr-opr-11">Na jakim etapie jesteśmy dzisiaj</h2>
        <div class="wr-opr-12">
            <div class="card card--white card--p28 card--r18">
                <div class="label-accent mb-14">MARZEC 2025</div>
                <div class="card-title">Start prac</div>
                <div class="body-muted">Koncepcja produktu, model działania i analiza tego, czego nie robi
                    konkurencja.
                </div>
            </div>
            <div class="card card--white card--p28 card--r18">
                <div class="label-accent mb-14">ETAP OBECNY</div>
                <div class="card-title">Prace rozwojowe</div>
                <div class="body-muted">Rozpoznawanie tarcz i przestrzelin, rdzeń dziennika treningowego, wirtualna
                    szafa na broń.
                </div>
            </div>
            <div class="card card--accent-tint card--p28 card--r18">
                <div class="label-accent mb-14">NAJBLIŻSZY KROK</div>
                <div class="card-title">Testy z użytkownikami</div>
                <div class="body-muted p-body--ink">Zamknięta grupa ze wczesnego dostępu. Na realnych tarczach
                    weryfikujemy skuteczność rozpoznawania — i tam zapadają decyzje o kolejnych funkcjach.
                </div>
            </div>
            <div class="wr-opr-15">
                <div class="wr-opr-16">PÓŹNIEJ</div>
                <div class="wr-opr-17">Publikacja w sklepach</div>
                <div class="wr-opr-18">Daty jeszcze nie ogłaszamy. Podamy ją, kiedy testy potwierdzą, że produkt jest
                    gotowy.
                </div>
            </div>
        </div>
        <p class="wr-opr-19">Świadomie nie publikujemy jeszcze liczb o skuteczności rozpoznawania ani o liczbie
            użytkowników. Nie mamy ich w formie, którą dałoby się uczciwie pokazać — pojawią się na tej stronie po
            testach.</p>
    </section>

    <section class="section-inner">
        <div class="eyebrow">Model biznesowy</div>
        <h2 class="h-section wr-opr-11">Prosty model, bez zaskoczeń w regulaminie</h2>
        <p class="wr-opr-19">Wasp.red jest aplikacją płatną od startu — konto aktywuje licencję i wiąże instalację z
            użytkownikiem. Konkretne ceny ogłosimy przed premierą; poniżej sam układ modelu.</p>
        <div class="wr-opr-12">
            <div class="card card--white card--p28 card--r18">
                <div class="label-accent mb-14">B2C — STRZELEC INDYWIDUALNY</div>
                <div class="card-title">Freemium</div>
                <div class="body-muted">Bezpłatnie: rezerwacja torów i podstawowe zliczanie wyników. W subskrypcji:
                    pełna funkcjonalność — rozpoznawanie AI, statystyki, warstwa społecznościowa.
                </div>
            </div>
            <div class="card card--white card--p28 card--r18">
                <div class="label-accent mb-14">B2B — STRZELNICE</div>
                <div class="card-title">Subskrypcja</div>
                <div class="body-muted">Dedykowana wersja wasp.red dla obiektów: zarządzanie rezerwacjami torów i osi,
                    statystyki klubowe.
                </div>
            </div>
        </div>
    </section>

    <section class="on-dark">
        <div class="wr-opr-20">
            <div>
                <div class="eyebrow-light">Rynek</div>
                <h2 class="h-subsection h-subsection--md h2">Skala, na której to działa</h2>
                <p class="p-body on-dark-muted wr-opr-21">Strzelectwo w Polsce rośnie, a razem z nim liczba klubów i
                    zawodów. Rynek międzynarodowy jest o kilka rzędów większy, a aplikacja oparta o zdjęcie tarczy nie
                    ma bariery językowej.</p>
            </div>
            <div class="wr-opr-22">
                <div>
                    <div class="stat-num stat-num--lg">dziesiątki tys.</div>
                    <div class="mono-note-dark-tight">czynnych strzelców w Polsce</div>
                </div>
                <div>
                    <div class="stat-num stat-num--lg">600</div>
                    <div class="mono-note-dark-tight">klubów sportowych w Polsce</div>
                </div>
                <div>
                    <div class="stat-num stat-num--lg">setki</div>
                    <div class="mono-note-dark-tight">zawodów rocznie w kraju</div>
                </div>
                <div>
                    <div class="wr-opr-23">miliony</div>
                    <div class="mono-note-dark-tight">strzelców na świecie</div>
                </div>
            </div>
        </div>
    </section>

    <section class="wr-opr-24">
        <div>
            <h2 class="h-subsection h-subsection--sm wr-dla-13">Szukamy klubów, instruktorów i partnerów</h2>
            <p class="p-body p-body--ink wr-opr-25">Prowadzisz klub, szkolenia albo strzelnicę? Chcemy testować z Wami i
                wspólnie ustawiać funkcje klubowe. Napisz bezpośrednio.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-red btn--lg">Kontakt</a>
    </section>
<?php get_footer(); ?>
