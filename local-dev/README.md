# Lokalny WordPress (Docker)

Środowisko do testowania motywu `wasp-red` bez instalowania czegokolwiek na systemie (żadnego PHP/MySQL/serwera na hoście — wszystko w kontenerach). Motyw jest podpięty jako bind mount z `../wordpress/wp-content/themes/wasp-red`, więc każda zmiana w tamtym katalogu jest widoczna od razu, bez przebudowy.

To jest **wyłącznie środowisko deweloperskie** — nie wchodzi w skład tego, co trafia na hosting produkcyjny (patrz `wordpress/README.md`).

## Adres i dane logowania

- Strona: http://localhost:8090/
- wp-admin: http://localhost:8090/wp-admin/
- Login: `admin` / Hasło: ustawione ręcznie przy `wp core install` (patrz "Podstawowe komendy" w `wordpress/README.md") — celowo nie trzymamy go tu w plaintext, bo repo jest publiczne, mimo że kontener i tak nie jest osiągalny spoza tej maszyny.
- Baza danych: MariaDB, user/pass `wordpress`/`wordpress` (wartości domyślne z `docker-compose.yml`), tylko wewnątrz sieci dockerowej — brak portu wystawionego na hosta, więc nieosiągalne z zewnątrz nawet ze znajomością tych danych.

Jeśli wolisz inne hasło/port, zmień w `docker-compose.yml` i przelogicznij `wp option update siteurl/home` przez `wpcli`, jeśli zmienisz port.

## Podstawowe komendy

```bash
cd local-dev

# start / stop
docker compose up -d
docker compose down          # zatrzymuje, zachowuje dane (wolumeny)
docker compose down -v       # zatrzymuje i KASUJE bazę + wp-content (pełny reset)

# logi
docker compose logs -f wordpress

# WP-CLI (kontener już działa, nie trzeba "run")
docker compose exec wpcli wp <dowolna komenda>
# np.:
docker compose exec wpcli wp post list --post_type=page
docker compose exec wpcli wp theme list
docker compose exec wpcli wp cache flush
```

## Dlaczego port 8090, nie 8080

8080 kolidował z Service Workerem zarejestrowanym w przeglądarce przez inny, niepowiązany projekt na tej maszynie (przeglądarka pamięta SW per-origin niezależnie od tego, co aktualnie odpowiada na danym porcie). Jeśli kiedyś przeniesiesz to na inny port, pamiętaj zaktualizować też opcje WP:

```bash
docker compose exec wpcli wp option update siteurl "http://localhost:<NOWY_PORT>"
docker compose exec wpcli wp option update home "http://localhost:<NOWY_PORT>"
```
