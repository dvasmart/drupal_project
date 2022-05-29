---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/src/Commands/DevelCommands.php
command: devel:hook
---
# devel:hook

List implementations of a given hook and optionally edit one.

#### Examples

- <code>devel-hook cron</code>. List implementations of hook_cron().

#### Arguments

- **hook**. The name of the hook to explore.
- **implementation**. The name of the implementation to edit. Usually omitted.

#### Options

- ** --editor[=EDITOR]**. A string of bash which launches user's preferred text editor. Defaults to *${VISUAL-${EDITOR-vi}}*.
- ** --bg**. Launch editor in background process.

#### Aliases

- fnh
- fn-hook
- hook
- devel-hook

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.