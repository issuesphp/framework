<?php

require 'config/db.php';


$db = new mysqli($db["host"], $db["username"], $db["password"], $db["database"]);

if ($db->connect_error) {

    die("Connection failed: " . $db->connect_error);
}

?>