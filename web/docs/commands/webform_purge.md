---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:purge
---
# webform:purge

Purge webform submissions from the databases

#### Examples

- <code>drush webform:purge</code>. Pick a webform and then purge its submissions.
- <code>drush webform:purge contact</code>. Delete 'Contact' webform submissions.
- <code>drush webform:purge ::all</code>. Purge all webform submissions.

#### Arguments

- **[webform_id]**. A webform machine name. If not provided, user may choose from a list of names.

#### Options

- ** --all**. Flush all submissions
- ** --entity-type[=ENTITY-TYPE]**. The entity type for webform submissions to be purged
- ** --entity-id[=ENTITY-ID]**. The ID of the entity for webform submissions to be purged

#### Aliases

- wfp
- webform-purge

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.