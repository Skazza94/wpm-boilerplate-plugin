# Boilerplate Plugin for WPM

Boilerplate Plugin ready-to-use with **WPM**:
- `config` folder with all configuration files ready for WPM.
- `languages` contains the `.po` file to use for translations.

The plugin requires at least **PHP 7.4.0**.

## Configuration

With these steps, you will make this project a standalone plugin, unbounded from this repository: 
1. Delete the `.git` folder (if present), to unbind your project from this repository.
   - Otherwise, you can fork the project and change it as you like.
3. Rename the `wpm-boilerplate-plugin` folder in the desired plugin's name.
4. Rename the plugin's root file `wp-modular-boilerplate.php` with the same folder's name.
5. Edit the first comment of the `wp-modular-boilerplate.php` root file to add your plugin's information.
6. Edit the `config/wp_modular.php` file, adding base plugin's information:
   - `plugin_slug`: same slug of the folder/root file of the plugin.
   - `plugin_name`: slug used for the translation file in `languages`.
   - `version`: plugin's version.
7. Do a `composer install` from the root directory to install WPM and its dependencies.
8. Copy the `.env.template` file and rename it to `.env`
   - You can enable/disable `CACHE`, whether you want to use cache (for YML files and other files) or not.
   - RECOMMENDED: `false` in development, `true` in production.

## Wiki
Read the [Wiki](https://github.com/Skazzino/wpm-boilerplate-plugin/wiki) to know how to build Modules and use Services.
