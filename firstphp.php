<?php
//     $result = 999;

// if ($result >= 80 and $result <= 100) {
//         echo "You got A+";
// } else if ($result >= 70 && $result <= 79) { 
//         echo "You got A Grad";
// }else if ($result >= 60 && $result <= 69) { 
//     echo "You got A- Grad";
// }else if ($result >= 50 && $result <= 59) { 
//     echo "You got B Grad";
// }else if ($result >= 40 && $result <= 49) { 
//     echo "You got C Grad";
// }else if ($result >= 33 && $result <= 49) { 
//     echo "You got D Grad";
// }else if ($result >= 0 && $result <= 32) { 
//     echo "You got F Grad";
// }else { 
//     echo "You got nothing";
// }
$marks = 80;

switch ($marks){
    case ($marks >= 80 && $marks <=100):
    
    echo "You got A+";
        break;
    
    case ($marks >= 70 && $marks <=79):
        echo "You got A";
        break;
    case ($marks >= 60 && $marks <=69):
            echo "You got A-";
        break;
    case ($marks >= 50 && $marks <=59):
            echo "You got B";
        break;
    case ($marks >= 40 && $marks <=49):
            echo "You got B";
        break;
    case ($marks >= 40 && $marks <=49):
            echo "You got C";
        break;
    case ($marks >= 33 && $marks <=39):
            echo "You got D";
        break;
    case ($marks >= 0 && $marks <=32):
            echo "You got F";
        break;
    default:
        echo "You got nothing";
}
 ?>