---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/webform/src/Commands/WebformCommands.php
command: webform:export
---
# webform:export

Exports webform submissions to a file.

#### Arguments

- **[webform]**. The webform ID you want to export (required unless --entity-type and --entity-id are specified)

#### Options

- ** --exporter[=EXPORTER]**. The type of export. (delimited, table, yaml, or json)
- ** --delimiter[=DELIMITER]**. Delimiter between columns (defaults to site-wide setting). This option may need to be wrapped in quotes. i.e. --delimiter="\t".
- ** --multiple-delimiter[=MULTIPLE-DELIMITER]**. Delimiter between an element with multiple values (defaults to site-wide setting).
- ** --file-name[=FILE-NAME]**. File name used to export submission and uploaded filed. You may use tokens.
- ** --archive-type[=ARCHIVE-TYPE]**. Archive file type for submission file uploadeds and generated records. (tar or zip)
- ** --header-format[=HEADER-FORMAT]**. Set to "label" (default) or "key"
- ** --options-item-format[=OPTIONS-ITEM-FORMAT]**. Set to "label" (default) or "key". Set to "key" to print select list values by their keys instead of labels.
- ** --options-single-format[=OPTIONS-SINGLE-FORMAT]**. Set to "separate" (default) or "compact" to determine how single select list values are exported.
- ** --options-multiple-format[=OPTIONS-MULTIPLE-FORMAT]**. Set to "separate" (default) or "compact" to determine how multiple select list values are exported.
- ** --entity-reference-items[=ENTITY-REFERENCE-ITEMS]**. Comma-separated list of entity reference items (id, title, and/or url) to be exported.
- ** --excluded-columns[=EXCLUDED-COLUMNS]**. Comma-separated list of component IDs or webform keys to exclude.
- ** --uuid[=UUID]**. Use UUIDs for all entity references. (Only applies to CSV download)
- ** --entity-type[=ENTITY-TYPE]**. The entity type to which this submission was submitted from.
- ** --entity-id[=ENTITY-ID]**. The ID of the entity of which this webform submission was submitted from.
- ** --range-type[=RANGE-TYPE]**. Range of submissions to export: "all", "latest", "serial", "sid", or "date".
- ** --range-latest[=RANGE-LATEST]**. Integer specifying the latest X submissions will be downloaded. Used if "range-type" is "latest" or no other range options are provided.
- ** --range-start[=RANGE-START]**. The submission ID or start date at which to start exporting.
- ** --range-end[=RANGE-END]**. The submission ID or end date at which to end exporting.
- ** --uid[=UID]**. The ID of the user who submitted the form.
- ** --order[=ORDER]**. The submission order "asc" (default) or "desc".
- ** --state[=STATE]**. Submission state to be included: "completed", "draft" or "all" (default).
- ** --sticky[=STICKY]**. Flagged/starred submission status.
- ** --files[=FILES]**. Download files: "1" or "0" (default). If set to 1, the exported CSV file and any submission file uploads will be download in a gzipped tar file.
- ** --destination[=DESTINATION]**. The full path and filename in which the CSV or archive should be stored. If omitted the CSV file or archive will be outputted to the command line.

#### Aliases

- wfx
- webform-export

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.