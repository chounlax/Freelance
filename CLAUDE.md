# Portfolio freelance — Sean Thompson

Site vitrine freelance d'un étudiant en BTS SIO (SLAM), pour Upwork. Symfony 7.4 (PHP 8.5) + Twig, sans JavaScript ni base de données.
Bilingue : anglais par défaut sur `/`, français sur `/fr` (route localisée `home` dans `src/Controller/HomeController.php`).

## Commandes

- `symfony server:start` : lance le site en local
- `php bin/console lint:twig templates` / `php bin/console lint:yaml translations` : vérifications
- `php bin/console app:export-static --base=/Freelance` : export HTML statique dans `dist/` (utilisé par `.github/workflows/deploy.yml` pour GitHub Pages)

## Règles

- Tous les textes sont dans `translations/messages.en.yaml` ET `messages.fr.yaml` : toujours modifier les deux avec les mêmes clés.
- Infos de contact (e-mail, Upwork, GitHub, portfolio) : `globals` de `config/packages/twig.yaml`.
- Chemins vers les fichiers de `public/` toujours avec `asset()`, liens internes avec `path()` : le site est publié dans un sous-dossier (`/Freelance`).
- Nouvelle page = route + template + ajout dans la constante `PAGES` de `src/Command/ExportStaticCommand.php`.
- Pas d'adresse postale ni de SIRET sur ce site (choix de l'utilisateur pour protéger sa vie privée).
- Je suis étudiant et je dois pouvoir expliquer mon code : reste simple, explique ce que tu modifies, en français.
