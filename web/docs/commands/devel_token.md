---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/devel/src/Commands/DevelCommands.php
command: devel:token
---
# devel:token

List available tokens.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --fields=FIELDS**. Available fields: Group (group), Token (token), Name (name) [default: *group,token,name*]
- ** --field=FIELD**. Select just one field, and force format to *string*.

#### Topics

- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- token
- devel-token

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.