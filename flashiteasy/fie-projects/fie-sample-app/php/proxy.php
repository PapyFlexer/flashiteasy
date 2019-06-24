<?php
//On verifie que l'on a bien reçu la variable venant de flash
if(!isset($_POST["proxy"])) {
//si vide on arrte le script
die( "Error" );
}
//si votre .php n'est pas encodé en utf-8, decommentez cette ligne et supprimer l'autre echo
//echo utf8_encode(file_get_contents($_GET["maVariable"]));
//et si votre php est encodé en utf8, si pas supprimer la ligne suivante et decommenter la ligne precedente
echo file_get_contents($_POST["proxy"]);
?> 