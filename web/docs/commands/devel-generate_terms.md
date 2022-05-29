---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/devel_generate/src/Commands/DevelGenerateCommands.php
command: devel-generate:terms
---
# devel-generate:terms

Create terms in specified vocabulary.

#### Arguments

- **[num]**. Number of terms to generate.

#### Options

- ** --kill**. Delete all terms in these vocabularies before generating new ones.
- ** --bundles[=BUNDLES]**. A comma-delimited list of machine names for the vocabularies where terms will be created.
- ** --feedback[=FEEDBACK]**. An integer representing interval for insertion rate logging. [default: *1000*]
- ** --languages[=LANGUAGES]**. A comma-separated list of language codes
- ** --translations[=TRANSLATIONS]**. A comma-separated list of language codes for translations.
- ** --min-depth[=MIN-DEPTH]**. The minimum depth of hierarchy for the new terms. [default: *1*]
- ** --max-depth[=MAX-DEPTH]**. The maximum depth of hierarchy for the new terms. [default: *4*]

#### Aliases

- gent
- devel-generate-terms

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.