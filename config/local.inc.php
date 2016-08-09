<?php

/**
 * Local Configuration
 *
 * This configuration file is for environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * -dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore.
 * This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

$_localConfig = array(
    'bdd' => array(
        'host' => 'localhost',
        'name' => 'lecasier9',
        'port' => '8889',
        'login' => 'root',//à ajouter pour la connexion
        'pwd' => 'root'//à ajouter pour la connexion
    ),
);
?>
