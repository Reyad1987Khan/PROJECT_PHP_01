
<!-- // // session script
// // session_start ();
// // $_SESSION ['username']='Reyad ontor';
// setcookie ('username','Reyad Khan',time()+ 10);

// Get and Post Method -->
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];


if ( !empty($username) && !empty ($password) ) {
    if ( !empty($username) && !empty ($password)){
        if ($username == 'Reyad' && $password == '12345') {
        echo "Log in successfull !";
    } else {
        echo "You got error!";
    } 
} else {
    echo "Input Data!";
}
}

?>

<form action="Session&Cokis.php" method="POST">
    User Name : <input type="text" name="username"> <br><br>
    Password : <input type="password" name="password"><br><br>
    <input type="submit" value="Log in">
</form>