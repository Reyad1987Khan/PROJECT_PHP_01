<!-- All this 
PHP Project Tutorial Bangla | Store Management System - SMS | Create Database & Insert Update Data 2
https://www.youtube.com/watch?v=5wVItH9g3eI -->

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <?php
    if (isset($_GET['CATEGORY_NAME'])) {
        $CATEGORY_NAME          = $_GET['CATEGORY_NAME'];
        $CATEGORY_ENTRY_DATE    = $_GET['CATEGORY_ENTRY_DATE'];

        // Example (MySQLi Object-oriented)
        // https://www.w3schools.com/php/php_mysql_insert.asp
        
        $sql = "INSERT INTO category (CATEGORY_NAME,CATEGORY_ENTRY_DATE)
               VALUES ('$CATEGORY_NAME', '$CATEGORY_ENTRY_DATE')";
               if ($conn->query($sql) == TRUE) {
                ECHO 'Data Inserted';
            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }
    ?>
    <form action="add_category.php" method="GET">
        Category: <br>
        <input type="text" name="CATEGORY_NAME"><br>
        Category Entry Date : <br>
        <input type="date" name="CATEGORY_ENTRY_DATE"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>