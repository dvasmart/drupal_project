---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/entity_reference_revisions/src/Commands/EntityReferenceRevisionsCommands.php
command: err:purge
---
# err:purge

Orphan composite revision deletion.

#### Examples

- <code>drush err:purge paragraph</code>. Purge orphaned paragraphs.

#### Arguments

- **types**. A comma delimited list of entity types to check for orphans. Omit to choose from a list.

#### Aliases

- errp

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.