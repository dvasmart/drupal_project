---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/pathauto/src/Commands/PathautoCommands.php
command: pathauto:aliases-generate
---
# pathauto:aliases-generate

(Re)generate URL aliases.

#### Examples

- <code>drush pathauto:aliases-generate all all</code>. Generate all URL aliases.
- <code>drush pathauto:aliases-generate create canonical_entities:node</code>. Generate URL aliases for un-aliased node paths only.
- <code>drush pathauto:aliases-generate</code>. When the arguments are omitted they can be chosen from an interactive menu.

#### Arguments

- **[action]**. The action to take. Possible actions are "create" (generate aliases for un-aliased paths only), "update" (update aliases for paths that have an existing alias) or "all" (generate aliases for all paths).
- **[types]**. Comma-separated list of aliase typess to generate. Pass "all" to generate aliases for all types.

#### Aliases

- pag

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.