---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:composer:update
---
# webform:composer:update

Updates the Drupal installation's composer.json to include the Webform module's selected libraries as repositories.

#### Examples

- <code>webform:composer:update</code>. Updates the Drupal installation's composer.json to include the Webform module's selected libraries as repositories.

#### Options

- ** --disable-tls**. If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed.

#### Aliases

- wfcu
- webform-composer-update

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.