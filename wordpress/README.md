# wasp.red — motyw WordPress

Autorski, statyczny w treści motyw WordPress dla landing page'a wasp.red. Powstaje, bo umowa z klientem wymaga CMS-a — zamiast przepisywać projekt pod page builder, treść i layout każdej strony żyją w plikach szablonu (PHP), 1:1 z zatwierdzonym designem statycznym z [`../www/main`](../www/main). WordPress w tym podejściu dostarcza panel administracyjny i spełnia wymóg CMS-a, natomiast edycja treści landing page'a nadal odbywa się w kodzie, nie w edytorze WP.

## Wymagania

- **Lokalnie:** Docker + Docker Compose (środowisko w [`../local-dev`](../local-dev), zero instalacji na hoście).
- **Produkcyjnie:** dowolny hosting z PHP 8.1+ i MySQL/MariaDB zgodny z WordPressem 6.x (docelowo: hosting współdzielony).

## Struktura

```
wordpress/
└── wp-content/themes/wasp-red/    ← to jedyne, co trafia na prawdziwy WordPress
    ├── style.css                  ← wymagany nagłówek motywu (metadane)
    ├── functions.php              ← enqueue CSS/fontów, dobór stylu per-strona
    ├── header.php / footer.php    ← wspólny szkielet <head>/<body>, wołane przez get_header()/get_footer()
    ├── index.php                  ← wymagany fallback (404, wyszukiwarka, nieprzewidziana strona)
    ├── front-page.php             ← strona główna (z www/main/index.html)
    ├── page-funkcje.php           ← z www/main/funkcje.html
    ├── page-dla-kogo.php          ← z www/main/dla-kogo.html
    ├── page-prywatnosc.php        ← z www/main/prywatnosc.html
    ├── page-o-projekcie.php       ← z www/main/o-projekcie.html
    ├── page-kontakt.php           ← z www/main/kontakt.html
    ├── template-parts/            ← nav (site-nav.php), pasek dofinansowania (funding-bar-top.php, tylko front page), stopkowy baner (funding-banner.php, wszystkie strony)
    └── assets/css, assets/img     ← skopiowane 1:1 z www/main/assets
```

**Rdzeń WordPressa, wtyczki i `wp-config.php` nie są tu commitowane** — tylko autorski motyw.

## Jak to działa

Każda z sześciu stron ma dedykowany plik `page-{slug}.php`, który WordPress dobiera **automatycznie po slugu** Strony utworzonej w wp-adminie (mechanizm `page-{slug}.php` z template hierarchy) — bez zaznaczania niczego w polu "Szablon" w Atrybutach strony. Strony w wp-adminie istnieją więc głównie jako "wieszaki" (tytuł + slug), a cała treść siedzi w kodzie.

Oryginalne tytuły/`meta description` (unikalne, bez wspólnego wzorca) są przekazywane jawnie do `header.php`:

```php
get_header( null, [
    'title'       => 'Funkcje — wasp.red',
    'description' => 'Rozpoznawanie tarczy z jednego zdjęcia, statystyki treningowe...',
] );
```

## Uruchomienie lokalnie od zera

```bash
cd local-dev
docker compose up -d

# instalacja WP
docker compose exec wpcli wp core install \
  --url="http://localhost:8090" \
  --title="wasp.red" \
  --admin_user="admin" \
  --admin_password="<twoje-haslo>" \
  --admin_email="<twoj@email.pl>" \
  --skip-email

# motyw
docker compose exec wpcli wp theme activate wasp-red

# strony (slug musi być dokładnie taki jak niżej — patrz "Jak to działa")
docker compose exec wpcli wp post create --post_type=page --post_title="Strona główna" --post_name="strona-glowna" --post_status=publish --porcelain
docker compose exec wpcli wp post create --post_type=page --post_title="Funkcje" --post_name="funkcje" --post_status=publish
docker compose exec wpcli wp post create --post_type=page --post_title="Dla kogo" --post_name="dla-kogo" --post_status=publish
docker compose exec wpcli wp post create --post_type=page --post_title="Prywatność" --post_name="prywatnosc" --post_status=publish
docker compose exec wpcli wp post create --post_type=page --post_title="O projekcie" --post_name="o-projekcie" --post_status=publish
docker compose exec wpcli wp post create --post_type=page --post_title="Kontakt" --post_name="kontakt" --post_status=publish

# strona główna (użyj ID zwróconego przez pierwsze post create powyżej)
docker compose exec wpcli wp option update show_on_front page
docker compose exec wpcli wp option update page_on_front <ID_strony_glownej>

# ładne permalinki
docker compose exec wpcli wp rewrite structure '/%postname%/'
docker compose exec wpcli wp rewrite flush --hard
```

Środowisko już postawione i skonfigurowane w tym repo działa pod `http://localhost:8090/` — bieżące komendy (start/stop/reset, dane logowania) są w [`../local-dev/README.md`](../local-dev/README.md), nie trzeba przechodzić przez powyższe od nowa.

## Stan projektu

- [x] Szkielet motywu i części wspólne (header/footer/nav/pasek dofinansowania)
- [x] Sześć szablonów stron, treść zweryfikowana bit-for-bit względem `www/main/*.html`
- [x] Uruchomione i sprawdzone wizualnie lokalnie (Docker) — po drodze znalezione i naprawione dwa błędy: podwójny `<title>` (zbędny `add_theme_support('title-tag')`) oraz brak CSS na podstronach (`is_page_template()` sprawdzał tylko jawnie przypisany szablon zamiast faktycznie dobranego po slugu — poprawione na `is_page( $slug )`)
- [ ] Formularze "wczesny dostęp" (na stronie głównej i `/kontakt/`) — obecnie przeniesione 1:1 jako makieta, bez `<form>` i bez wysyłki; docelowo wtyczka (Fluent Forms/Contact Form 7) + SMTP
- [ ] SEO (tytuły/opisy edytowalne z wp-admina), favicon/Site Icon
- [ ] Wdrożenie na hosting współdzielony

## Powiązane

- Źródło treści i design referencyjny: [`../www/main`](../www/main)
- Lokalne środowisko Docker: [`../local-dev`](../local-dev)
