---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/devel_generate/src/Commands/DevelGenerateCommands.php
command: devel-generate:users
---
# devel-generate:users

Create users.

#### Arguments

- **[num]**. Number of users to generate.

#### Options

- ** --kill**. Delete all users before generating new ones.
- ** --roles[=ROLES]**. A comma delimited list of role IDs for new users. Don't specify 'authenticated'.
- ** --pass**. Specify a password to be set for all generated users.

#### Aliases

- genu
- devel-generate-users

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.