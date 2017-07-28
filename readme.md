# Boilerplate per Plugin WordPress WP Modular by Skazza

Progetto base per plugin WordPress da utilizzare con il framework **WP Modular**.

- File di configurazione base per il plugin ed i servizi di WP Modular.
- **.env** base per il plugin.
- Definizione dei files da utilizzare per le traduzioni.
- Definizione dei moduli base per CronTask e Traduzioni.

## Configurazione

- Rinominare la cartella **wp-modular-boilerplate** nel nome del plugin desiderato.
- Rinominare il file root del plugin **wp-modular-boilerplate.php** con lo stesso slug della cartella.
- Modificare il nuovo file root inserendo nel commento principale le informazioni del plugin.
- Modificare il file **.env** inserendo le informazioni base del plugin:
  - **WEBSITE_NICE_NAME**: nome del sito completo pronto alla stampa.
  - **PLUGIN_SLUG**: stesso slug usato per il nome della cartella e del file root del plugin.
  - **PLUGIN_NAME**: slug utilizzato per il file di traduzione in **languages**.
  - **VERSION**: la versione del plugin.
- Dare il comando **composer install** dalla directory root per installare WP Modular e le sue dipendenze.
- Aggiungere la cartella **/cache** al **.gitignore** (non è stata inserita nel boilerplate perchè la cartella non viene mantenuta).
- Eliminare la cartella **.git** per svincolarlo dal repository del boilerplate.