---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:generate
---
# webform:generate

Create submissions in specified webform.

#### Arguments

- **[webform_id]**. Webform id into which new submissions will be inserted.
- **[num]**. Number of submissions to insert. Defaults to 50.

#### Options

- ** --kill**. Delete all submissions in specified webform before generating.
- ** --feedback[=FEEDBACK]**. An integer representing interval for insertion rate logging. Defaults to 1000
- ** --entity-type[=ENTITY-TYPE]**. The entity type to which this submission was submitted from.
- ** --entity-id[=ENTITY-ID]**. The ID of the entity of which this webform submission was submitted from.

#### Aliases

- wfg
- webform-generate

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.