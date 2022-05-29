---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/devel_generate/src/Commands/DevelGenerateCommands.php
command: devel-generate:content
---
# devel-generate:content

Create content.

#### Arguments

- **[num]**. Number of nodes to generate.
- **[max_comments]**. Maximum number of comments to generate.

#### Options

- ** --kill**. Delete all content before generating new content.
- ** --bundles[=BUNDLES]**. A comma-delimited list of content types to create. [default: *page,article*]
- ** --authors[=AUTHORS]**. A comma delimited list of authors ids. Defaults to all users.
- ** --feedback[=FEEDBACK]**. An integer representing interval for insertion rate logging. [default: *1000*]
- ** --languages[=LANGUAGES]**. A comma-separated list of language codes
- ** --translations[=TRANSLATIONS]**. A comma-separated list of language codes for translations.
- ** --add-type-label**. Add the content type label to the front of the node title
- ** --skip-fields**. A comma delimited list of fields to omit when generating random values

#### Aliases

- genc
- devel-generate-content

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.