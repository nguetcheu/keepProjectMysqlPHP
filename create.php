<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';

$connection = require_once './Connection.php';

$notes = $connection->addNotes($_POST);
header('Location: index.php');