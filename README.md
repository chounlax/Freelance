# Portfolio freelance — Sean Thompson

Site de présentation de mes services de développeur web & mobile freelance (pour Upwork et mes clients).
Fait avec **Symfony 7.4 + Twig**, en **anglais** (`/`) et en **français** (`/fr`) grâce au composant de traduction.

## Lancer le site

```bash
composer install       # une seule fois
symfony server:start
```

## Où modifier quoi

| Quoi | Où |
| --- | --- |
| Tous les textes | `translations/messages.en.yaml` et `translations/messages.fr.yaml` (mêmes clés dans les deux) |
| E-mail, lien Upwork, GitHub, portfolio | `config/packages/twig.yaml` (`globals`) — le bouton Upwork n'apparaît que si `upwork_url` est rempli |
| Structure de la page | `templates/home/index.html.twig` |
| Menu, bouton de langue, pied de page | `templates/base.html.twig` |
| Couleurs et mise en page | `public/css/style.css` |
| Images | `public/img/` |
| Route `/` + `/fr` | `src/Controller/HomeController.php` |

## Mise en ligne (GitHub Pages)

À chaque push sur `main`, la GitHub Action `.github/workflows/deploy.yml` installe PHP, puis
`php bin/console app:export-static` fait générer les pages par Symfony en HTML statique (`dist/`),
publié sur GitHub Pages (qui ne sait pas exécuter PHP).
