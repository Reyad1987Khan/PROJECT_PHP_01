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
    <title>List of Category</title>
</head>
<body>
    <?php
        $sql = "select * from category";

        $query = $conn->query($sql);
    echo "<table border='1' padding='4'>
         <tr>
            <th>CATEGORY ID</th>
            <th>CATEGORY NAME</th>
            <th>CATEGORY ENTRY DATE</th>
            <th>Action</th>
         </tr>";
        while ($data = mysqli_fetch_assoc($query)){
            $CATEGORY_ID            = $data ['CATEGORY_ID'];
            $CATEGORY_NAME          = $data ['CATEGORY_NAME'];
            $CATEGORY_ENTRY_DATE    = $data ['CATEGORY_ENTRY_DATE'];
        echo "<tr>
               <td>$CATEGORY_ID</td>
               <td>$CATEGORY_NAME</td>
               <td>$CATEGORY_ENTRY_DATE</td>
               <td><a href='#'>Edit</a></td>
              </tr>";
        }
    echo "</table>";
            ?>
</body>
</html>