# Boilerplate Plugin for WPM

Boilerplate Plugin ready-to-use with **WPM**:
- `config` folder with all configuration files ready for WPM.
- `languages` contains the `.po` file to use for translations.

## Configuration

With these steps, you will make this project a standalone plugin, unbounded from this repository: 
1. Delete the `.git` folder (if present), to unbind your project from this repository.
2. Rename the `wpm-boilerplate-plugin` folder in the desired plugin's name.
3. Rename the plugin's root file `wp-modular-boilerplate.php` with the same folder's name.
4. Edit the first comment of the root file to add your plugin's information.
5. Edit the `config/wp_modular.php` file, adding base plugin's information:
   - `plugin_slug`: same slug of the folder/root file of the plugin.
   - `plugin_name`: slug used for the translation file in `languages`.
   - `version`: plugin's version.
6. Do a `composer install` from the root directory to install WPM and its dependencies.
7. OPTIONAL: a `composer update` is recommended to refresh dependencies.
8. Copy the `.env.template` file and rename it to `.env`
   - You can enable/disable `CACHE`, whether you want to use cache (for YML files and other files) or not.
   - RECOMMENDED: `false` in development, `true` in production.

## Wiki
Read the [Wiki](https://github.com/Skazzino/wpm-boilerplate-plugin/wiki) to know how to build Modules and use Services.
