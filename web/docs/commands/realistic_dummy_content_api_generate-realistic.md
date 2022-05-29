---
edit_url: https://github.com/drush-ops/drush/blob/11.x/modules/contrib/realistic_dummy_content/api/src/DrushCommands/RealisticDummyContentDrushCommands.php
command: realistic_dummy_content_api:generate-realistic
---
# realistic_dummy_content_api:generate-realistic

Generates realistic dummy content.

Generates realistic dummy content by looking in each active module for a
file called realistic_dummy_content/recipe/module_name.recipe.inc, which
should contain a subclass of RealisticDummyContentRecipe called
module_name_realistic_dummy_content_recipe with a run() method.

#### Examples

- <code>realistic_dummy_content_api:generate-realistic</code>. Generates realistic dummy content by looking in each active module for a file called realistic_dummy_content/recipe/module_name.recipe.inc, which should contain a subclass of RealisticDummyContentRecipe called module_name_realistic_dummy_content_recipe with a run() method.

#### Aliases

- generate-realistic
- grc

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.