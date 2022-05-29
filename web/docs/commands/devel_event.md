---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/src/Commands/DevelCommands.php
command: devel:event
---
# devel:event

List implementations of a given event and optionally edit one.

#### Examples

- <code>devel-event</code>. Pick a Kernel event, then pick an implementation, and then view its source code.
- <code>devel-event kernel.terminate</code>. Pick a terminate subscribers implementation and view its source code.

#### Arguments

- **event**. The name of the event to explore. If omitted, a list of events is shown.
- **implementation**. The name of the implementation to show. Usually omitted.

#### Aliases

- fne
- fn-event
- event

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.