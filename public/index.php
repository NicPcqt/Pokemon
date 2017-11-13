
<?php
// Entête HTML ce require permet de charger toutes les balises d'en-tête de la page HTML
require_once('header.php');
// Fonctions de bases
require_once('../resources/function.php');
$errors = [];
// Affichage du lien d'insertion
affichePokemon();
// Fin du HTML
require_once('footer.php');