<?php
// racine des dossiers: include/require
define("SERVEUR_ROOT", dirname(__FILE__));
// racine du site (lien url: href/src)
define("ROOT_URL", substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(SERVEUR_ROOT))));
// nom de la base de donnee
define("DB_NAME", '');
