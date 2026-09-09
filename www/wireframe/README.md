# wasp.red — wireframe (GitHub Pages)

Zawartość tego folderu to gotowa, w pełni statyczna wersja wireframe'u z
`wireframe_opz8` (oryginalne pliki `.dc.html` z Claude Design, zależne od
zewnętrznego runtime'u `support.js` ładującego React/Babel z CDN). To niższa
wierność makiety niż w `opz8_pages` — zamiast zdjęć i wykresów SVG są tu
proste placeholdery z opisem (np. „zrzut ekranu: skan tarczy”). Strona nie
wymaga już żadnego buildu ani zewnętrznego skryptu — to zwykłe pliki
HTML/CSS gotowe do wystawienia na GitHub Pages.

## Struktura

- `index.html` — strona główna (landing)
- `funkcje.html`, `dla-kogo.html`, `prywatnosc.html`, `o-projekcie.html`, `kontakt.html`
- `assets/css/styles.css` — wspólne style (w tym stany hover zastępujące
  atrybut `style-hover` z oryginalnych plików `.dc.html`)
- `assets/img/` — logo (jasne/ciemne)
- `.nojekyll` — wyłącza przetwarzanie Jekyll (niepotrzebne dla zwykłego HTML)

Nawigacja i stopka są powielone w każdym pliku HTML — to standardowe podejście
dla prostej strony statycznej bez generatora/buildu.

## Publikacja na GitHub Pages

1. Zainicjuj repozytorium git (jeśli jeszcze go nie ma) i dodaj zawartość tego
   folderu jako korzeń repozytorium (albo skopiuj te pliki do korzenia
   istniejącego repo):
   ```
   git init
   git add .
   git commit -m "wasp.red: wireframe statyczny"
   git branch -M main
   git remote add origin <adres-twojego-repo-na-githubie>
   git push -u origin main
   ```
2. W ustawieniach repozytorium na GitHubie: **Settings → Pages → Build and
   deployment → Source: Deploy from a branch**, wybierz gałąź `main` i folder
   `/ (root)` — jeśli te pliki są w podfolderze repo (np.
   `opz8_wireframe_gh_pages/`), wskaż zamiast tego ten podfolder albo
   przenieś ich zawartość do korzenia repo/gałęzi `gh-pages`.
3. Po chwili strona będzie dostępna pod adresem
   `https://<twoj-login>.github.io/<nazwa-repo>/`.

Strona nie ma żadnego backendu — formularz zapisu na wczesny dostęp jest
wyłącznie wizualny (mockup) i nic nie wysyła.
