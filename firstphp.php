<?php
// // SWITCH 
// $marks = 20;
// switch ($marks){
//     case ( $marks >= 80 && $marks <= 100 ):
//         echo "you got A+";
//         break;
//         case ( $marks >= 70 && $marks <= 79 ):
//             echo "you got A";
//         break;
//         case ( $marks >= 60 && $marks <= 69 ):
//             echo "you got A-";
//         break;
//         case ( $marks >= 50 && $marks <= 59 ):
//             echo "you got B";
//         break;
//         case ( $marks >= 40 && $marks <= 49 ):
//             echo "you got C";
//         break;
//         case ( $marks >= 33 && $marks <= 39 ):
//             echo "you got D";
//         break;
//         case ( $marks >= 0 && $marks <= 32 ):
//             echo "you got F";
//         break;
//         default:
//         echo "You got nothing";
// }

// // IF ELSE STATEMENT
// $result = 900;
// if ($result >= 80 && $result <= 100) {
//     echo "you got A+";
// } else if ($result >= 70 && $result <= 79){
//     echo "you got A-";
// } else if ($result >= 60 && $result <= 69){
//     echo "you got A";
// }else if ($result >= 50 && $result <= 59){
//     echo "you got B";
// }else if ($result >= 40 && $result <= 49){
//     echo "you got C";
// }else if ($result >= 33 && $result <= 39){
//     echo "you got D";
// }else if ($result >= 0 && $result <= 32){
//     echo "you got F";
// }else {
//     echo "You got nothing";
// }

// // FOR LOOP
// for ($i = 1 ; $i <= 1000; $i++){
//     if ($i%2 != 0){
//         echo $i."<br>";  
//     }   
// }

// WHILE LOOP
// $i = 1;
// while ($i <= 1000){
//     if ($i%2 != 0) {
//     $i++;
//     echo $i."<br>";
//     }
// }
// // DO WHILE LOOP
// $i = 1;
// do{
//     if ($i%2 != 0)
//     echo $i."<br>";
//     $i++;
// }while ($i <= 1000);

/* multiline comment shit + all + a */
// PHP ARRAY
// $department = array("ICT Department","HR Department","Finance","Comercial","Complaince");
// // var_dump ($department);
// echo $department[4]; 
// PHP CLASS AND OBJECT
// class departments {
//     public $dep_name;
//     public $dep_location;
//     public function __construct ( $dep_name, $dep_location ) {
//         $this->dep_name = $dep_name;
//         $this->dep_location = $dep_location;
//     }
//     public function message () {
//         return "The name of Department is " . $this->dep_name . " " .$this->dep_location ."!";
//     }
// }
// $dep_info = new departments ("ICT", "2nd Floor");
// echo $dep_info -> message ();

class Person {
    public $personName;
    public $contract;
    public $designation;
    public $address;

    public function __construct ($fpersonName,$fcontract,$fdesignation,$faddress){
        $this->personName = $fpersonName;
        $this->contract = $fcontract;
        $this->designation = $fdesignation;
        $this->address = $faddress;
        // return "Name is " . $this->personName ." Contract Nmeber ".$this->contract. "Designation" . $this->designation . " & Address" .$this->address;
    }
}
$personInfo = new Person ('Reyad Khan','01735 133 961','Programmer','Mirpur-Dhaka');
echo "Name is " . $personInfo->personName ." Contract Nmeber ".$personInfo->contract. "Designation" . $personInfo->designation . " & Address" .$personInfo->address;

 ?>