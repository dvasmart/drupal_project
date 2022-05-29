---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/pathauto/src/Commands/PathautoCommands.php
command: pathauto:aliases-delete
---
# pathauto:aliases-delete

Delete URL aliases

#### Examples

- <code>drush pathauto:aliases-delete canonical_entities:node</code>. Delete all automatically generated URL aliases for node entities, preserving manually created aliases.
- <code>drush pathauto:aliases-delete all</code>. Delete all automatically generated URL aliases, preserving manually created ones.
- <code>drush pathauto:aliases-delete all --purge</code>. Delete all URL aliases, including manually created ones.
- <code>drush pathauto:aliases-delete</code>. When the alias types are omitted they can be chosen from an interactive menu.

#### Arguments

- **[types]**. Comma-separated list of alias types to delete. Pass "all" to delete aliases for all types.

#### Options

- ** --purge**. Deletes all URL aliases, including manually created ones.

#### Aliases

- pad

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.