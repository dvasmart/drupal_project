---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:import
---
# webform:import

Imports webform submissions from a CSV file.

#### Arguments

- **[webform]**. The webform ID you want to import (required unless --entity-type and --entity-id are specified)
- **[import_uri]**. The path or URI for the CSV file to be imported.

#### Options

- ** --skip_validation[=SKIP_VALIDATION]**. Skip form validation.
- ** --treat_warnings_as_errors[=TREAT_WARNINGS_AS_ERRORS]**. Treat all warnings as errors.
- ** --entity-type[=ENTITY-TYPE]**. The entity type to which this submission was submitted from.
- ** --entity-id[=ENTITY-ID]**. The ID of the entity of which this webform submission was submitted from.

#### Aliases

- wfi
- webform-import

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.