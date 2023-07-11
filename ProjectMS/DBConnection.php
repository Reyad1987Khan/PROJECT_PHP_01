<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "store_db";
$conn = new mysqli ($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Database Could not connected".connect_error);
}

?>