<?php

$connection = require_once 'Connection.php';

$connection->removeNote($_POST['id']);

header('Location: index.php');