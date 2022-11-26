<?php
    $result = 999;

if ($result >= 80 and $result <= 100) {
        echo "You got A+";
} else if ($result >= 70 && $result <= 79) { 
        echo "You got A Grad";
}else if ($result >= 60 && $result <= 69) { 
    echo "You got A- Grad";
}else if ($result >= 50 && $result <= 59) { 
    echo "You got B Grad";
}else if ($result >= 40 && $result <= 49) { 
    echo "You got C Grad";
}else if ($result >= 33 && $result <= 49) { 
    echo "You got D Grad";
}else if ($result >= 0 && $result <= 32) { 
    echo "You got F Grad";
}else { 
    echo "You got nothing";
}

 ?>