---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/devel_generate/src/Commands/DevelGenerateCommands.php
command: devel-generate:media
---
# devel-generate:media

Create media items.

#### Arguments

- **[num]**. Number of media items to generate.

#### Options

- ** --kill**. Delete all media items before generating new media.
- ** --media-types[=MEDIA-TYPES]**. A comma-delimited list of media types to create.
- ** --feedback[=FEEDBACK]**. An integer representing interval for insertion rate logging. [default: *1000*]
- ** --skip-fields**. A comma delimited list of fields to omit when generating random values.
- ** --languages**. A comma-separated list of language codes

#### Aliases

- genmd
- devel-generate-media

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.