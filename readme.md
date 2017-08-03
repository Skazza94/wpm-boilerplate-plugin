# Boilerplate Plugin for WPM

Boilerplate Plugin ready-to-use with **WPM**:
- **config** folder with all configuration files ready for WPM.
- Really simple **.env** with required plugin constants.
- **languages** contains the ``.po`` file to use for translations.

## Configuration

With these steps, you'll make this project a standalone plugin, unbinded from this repository: 
1. Delete the **.git** folder (if it's present), to unbind your project from this repository.
2. Rename the **wpm-boilerplate-plugin** folder in the desired plugin's name.
3. Rename the plugin's root file **wp-modular-boilerplate.php** with the same folder's name.
4. Edit the first comment of the root file to add your plugin's information.
5. Edit the **.env** file, adding base plugin's information:
    - **WEBSITE_NICE_NAME**: site name ready to print.
    - **PLUGIN_SLUG**: same slug of the folder/root file of the plugin.
    - **PLUGIN_NAME**: slug used for the translation file in **languages**.
    - **VERSION**: plugin's version.
    - **CACHE**: whether you want to use cache (for YML files and other files) or not.
        - RECOMMENDED: ``false`` in development, ``true`` in production.
6. Do a **composer install** from the root directory to install WPM and its dependencies.
7. OPTIONAL: a **composer update** is recommended to refresh dependencies.
8. Add the **/cache** folder to **.gitignore**.

## Wiki
Read the [Wiki](https://github.com/Skazzino/wpm-boilerplate-plugin/wiki) to know how to build Modules and use Services.
