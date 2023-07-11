<?php
 require ('DBConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viwe of Category</title>
</head>
<body>
<?php
$sql = "SELECT * FROM category";
$query = $conn->query($sql);
$data = mysqli_fetch_assoc($query);
var_dump($data);

?>
</body>
</html>