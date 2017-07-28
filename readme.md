# Boilerplate per Plugin WordPress WP Modular by Skazza

Progetto base per plugin WordPress da utilizzare con il framework **WP Modular**.

- Configurazioni base per i servizi ed il plugin
- .env base per il plugin
- Definizione dei files della lingua da utilizzare
- Moduli base per cron task e traduzioni

## Configurazione

- Rinominare la cartella nel nome del plugin desiderato.
- Rinominare il file root del plugin **wp-modular-boilerplate.php** con lo stesso slug della cartella.
- Modificare il nuovo file root inserendo nel commento principale le informazioni del plugin.
- Modificare il file **.env** inserendo le informazioni base del plugin:
  - **WEBSITE_NICE_NAME**: nome del sito completo pronto alla stampa.
  - **PLUGIN_SLUG**: stesso slug usato per il nome della cartella e del file root del plugin.
  - **PLUGIN_NAME**: slug utilizzato per il file di traduzione in **languages**.
  - **VERSION**: la versione del plugin.
- Dare il comando **composer install** dalla directory root per installare WP Modular e le sue dipendenze.
- Aggiungere **cache** al **.gitignore** (non è stato messo nel boilerplate altrimenti la cartella non viene mantenuta).