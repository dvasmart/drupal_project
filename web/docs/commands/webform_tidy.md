---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:tidy
---
# webform:tidy

Tidy export webform configuration files

#### Examples

- <code>drush webform:tidy webform</code>. Tidies YAML configuration files in 'webform/config' for the Webform module

#### Arguments

- **[target]**. The module (config/install), config directory (sync), or path (/some/path) that needs its YAML configuration files tidied. (Defaults to webform)

#### Options

- ** --dependencies**. Add module dependencies to installed webform and options configuration entities.
- ** --prefix[=PREFIX]**. Prefix for file names to be tidied. (Defaults to webform)

#### Aliases

- wft
- webform-tidy

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.