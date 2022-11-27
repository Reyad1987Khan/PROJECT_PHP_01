<?php
// SWITCH 
$marks = 20;
switch ($marks){
    case ( $marks >= 80 && $marks <= 100 ):
        echo "you got A+";
        break;
        case ( $marks >= 70 && $marks <= 79 ):
            echo "you got A";
        break;
        case ( $marks >= 60 && $marks <= 69 ):
            echo "you got A-";
        break;
        case ( $marks >= 50 && $marks <= 59 ):
            echo "you got B";
        break;
        case ( $marks >= 40 && $marks <= 49 ):
            echo "you got C";
        break;
        case ( $marks >= 33 && $marks <= 39 ):
            echo "you got D";
        break;
        case ( $marks >= 0 && $marks <= 32 ):
            echo "you got F";
        break;
        default:
        echo "You got nothing";
}
for ($i=1; $i <= 100; $i++){
    echo $i."<br>";
}

// IF ELSE STATEMENT
$result = 900;
if ($result >= 80 && $result <= 100) {
    echo "you got A+";
} else if ($result >= 70 && $result <= 79){
    echo "you got A-";
} else if ($result >= 60 && $result <= 69){
    echo "you got A";
}else if ($result >= 50 && $result <= 59){
    echo "you got B";
}else if ($result >= 40 && $result <= 49){
    echo "you got C";
}else if ($result >= 33 && $result <= 39){
    echo "you got D";
}else if ($result >= 0 && $result <= 32){
    echo "you got F";
}else {
    echo "You got nothing";
}
 ?>