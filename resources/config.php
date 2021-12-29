<?php


ob_start();/* output buffering allows to send multiple requests*/

session_start();

/*below defines directory separator depending on OS*/
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates" . DS . "front");

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates" . DS . "back");


defined("DB_HOST") ? null : define("DB_HOST","localhost");

defined("DB_USER") ? null : define("DB_USER", "root");


defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

// creating variable that holds connection details
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once("functions.php");
?>
