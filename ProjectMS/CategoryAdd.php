<?php
    require ('DBConnection.php');
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
if (isset($_GET ['category_name'])) {
    $category_name = $_GET ['category_name'];
    $category_entry_date = $_GET ['category_entry_date'];

    $sql = "INSERT INTO category (category_name, category_entry_date)
    VALUES ('$category_name',  '$category_entry_date')";
    if ($conn->query($sql) == TRUE) {
    echo "data insert successfully";
} else {
    echo "Error". $sql ."<b>".$conn->error;
}
}
?>
    <form action="CategoryAdd.php" method="GET">
    <label for="category_name">Category Name</label>
    <input type="text" name="category_name" id="category_name" placeholder="Category Name"><br><br>
    <label for="category_entry_date"></label>
    <input type="datetime-local" name="category_entry_date" id="category_entry_date"><br><br>
    <input type="submit" value="submit" id="submit">
    </form>
</body>
</html>