---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/simple_sitemap/src/Commands/SimpleSitemapCommands.php
command: simple-sitemap:rebuild-queue
---
# simple-sitemap:rebuild-queue

Queue all or specific sitemaps for regeneration.

#### Examples

- <code>drush simple-sitemap:rebuild-queue</code>. Rebuild the sitemap queue for all sitemaps.
- <code>drush simple-sitemap:rebuild-queue --variants=default,test</code>. Rebuild the sitemap queue queuing only sitemaps 'default' and 'test'.

#### Options

- ** --variants[=VARIANTS]**. Queue all or specific sitemaps for regeneration.

#### Aliases

- ssr
- simple-sitemap-rebuild-queue

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.