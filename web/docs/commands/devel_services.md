---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/src/Commands/DevelCommands.php
command: devel:services
---
# devel:services

Get a list of available container services.

#### Examples

- <code>drush devel-services</code>. Gets a list of all available container services
- <code>drush dcs plugin.manager</code>. Get all services containing "plugin.manager"

#### Arguments

- **[prefix]**. Optional prefix to filter the service list by.

#### Options

- ** --format[=FORMAT]**.  [default: *yaml*]

#### Aliases

- devel-container-services
- dcs
- devel-services

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.