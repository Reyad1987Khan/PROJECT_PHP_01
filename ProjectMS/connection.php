<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'store_db';
    $conn = new mysqli($hostname, $username, $password, $dbname);
   if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
// Method of Connection to MySQL Database
// 1. Object Oreented 
// 2. Procedural Method
// 3. Procedural Object Oreented Method
// MySQLi (object-oriented)
// MySQLi (procedural)
// PDO
?>