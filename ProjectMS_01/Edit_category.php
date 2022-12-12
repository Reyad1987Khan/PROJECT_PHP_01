<!-- All this 
PHP Project Tutorial Bangla | Store Management System - SMS | Create Database & Insert Update Data 2
https://www.youtube.com/watch?v=5wVItH9g3eI -->

<?php
require ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        $getid = $_GET['id'];
        $sql = "select * from category where CATEGORY_ID = $getid";
        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);

        $category_id            = $data['CATEGORY_ID'];
        $category_name          = $data['CATEGORY_NAME'];
        $category_entry_date    = $data['CATEGORY_ENTRY_DATE'];
    }
    ?>
    <form action="Edit_category.php" method="GET">
        Category: <br>
        <input type="text" name="CATEGORY_ID" value="<?php echo $category_id ?>"><br>
        Category Entry Date : <br>
        <input type="text" name="CATEGORY_NAME" value="<?php echo $category_name ?>"><br>
        <input type="text" name="CATEGORY_ENTRY_DATE" value="<?php echo $category_entry_date ?>"hidden>
        <input type="submit" value="Update">
    </form>
</body>
</html>