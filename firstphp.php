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
/*$department = array("ICT Department","HR Department","Finance","Comercial","Complaince");
// var_dump ($department);
echo $department[4]; */

// PHP CLASS AND OBJECT
/*class departments {
    public $dep_name;
    public $dep_location;
    public function __construct ( $dep_name, $dep_location ) {
        $this->dep_name = $dep_name;
        $this->dep_location = $dep_location;
    }
    public function message () {
        return "The name of Department is " . $this->dep_name . " " .$this->dep_location ."!";
    }
}
$dep_info = new departments ("ICT", "2nd Floor");
echo $dep_info -> message ();*/

// PHP CLASS AND OBJECT constract
/*class Person {
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
echo "Name is " . $personInfo->personName ." Contract Nmeber ".$personInfo->contract. "Designation" . $personInfo->designation . " & Address" .$personInfo->address;*/

// Normal CLASS AND Object
/*class Personinfo {
    public $name;
    public $cell;
    public $desig;
    public $dep;
    
    function empinfo ($pname,$pcell,$pdesig,$pdep) {
        $this->name = $pname;
        $this->cell = $pcell;
        $this->desig = $pdesig;
        $this->dep = $pdep;
        return "Employee Name: ".$this->name."<br>"."Contract Number :".$this->cell."<br>"." Designation ".$this->desig."<br>"." & Department :".$this->dep;
    }
}
$emp_info = new Personinfo ();
echo $emp_info->empinfo ('Fuad','016894563','Programmer','ICT Dep');*/

// PHP ARRAY
/*$departments = array("ICT","HR","Finance","Accounts","Merchandizer");
echo $departments [3];*/
// PHP CONSTRATCTOR and DESTRUCT
/*class Books {
    public $bookname;
    public $bookauthor;
    public $bookcomposer;
    public $bookpress;
    public function __construct ($bookname,$bookauthor,$bookcomposer,$bookpress) {
        $this->bookname = $bookname;
        $this->bookauthor = $bookauthor;
        $this->bookcomposer = $bookcomposer;
        $this->bookpress = $bookpress;
    }
    //  function __destruct () {
    //     echo "This Book Name is ".$this->bookname ."<br>"."The Author Name : ".$this->bookauthor ."<br>"." The Composser Name : ".$this->bookcomposer."<br>"."& the book pressed from : " .$this->bookpress;
    // }
   public function bookinfo () {
        echo "This Book Name is ".$this->bookname ."<br>"."The Author Name : ".$this->bookauthor ."<br>"." The Composser Name : ".$this->bookcomposer."<br>"."& the book pressed from : " .$this->bookpress;
    }
}
 class booklist extends Books {
    public function myFunc () {
        return "Thanks Everyone";
    }
 }
 $bookslists = new booklist ('Story','Reyad','Daluar','Zinnha Ltd','');
 echo  $bookslists->bookinfo ();*/
/*$booklist = new bookinfo ();*/
/*$bookdetails = new Books("Twilight","Reyad Khan","Foud","Zinna Press LTD");*/

// PHP CONSTRATCTOR and Inferitent
/*class Books {
    public $bookname;
    public $bookauthor;
    public $bookcomposer;
    public $bookpress;
    public function __construct ($bookname,$bookauthor,$bookcomposer,$bookpress) {
        $this->bookname = $bookname;
        $this->bookauthor = $bookauthor;
        $this->bookcomposer = $bookcomposer;
        $this->bookpress = $bookpress;
    }
    //  function __destruct () {
    //     echo "This Book Name is ".$this->bookname ."<br>"."The Author Name : ".$this->bookauthor ."<br>"." The Composser Name : ".$this->bookcomposer."<br>"."& the book pressed from : " .$this->bookpress;
    // }
    protected function bookinfo () {
        echo "This Book Name is ".$this->bookname ."<br>"."The Author Name : ".$this->bookauthor ."<br>"." The Composser Name : ".$this->bookcomposer."<br>"."& the book pressed from : " .$this->bookpress;
    }
}
 class booklist extends Books {
    public function myFunc () {
        return $this->bookinfo ();
    }
 }
 $bookslists = new booklist ('Story','Reyad','Daluar','Zinnha Ltd','');
 echo  $bookslists->myFunc ();*/



// // echo $bookdetails->bookinfo ();

// echo strlen("Bangladesh");
// echo str_word_count("Bnagladesh is my country");
// echo str_replace("Palkistan","BANGLADESH","Palkistan is my mothernand");

// PHP class & constract inheritence 
// https://www.youtube.com/watch?v=Hvyo5aPKhcQ

/*class Departments {
    public $departments;
    public $mgr_name;
    public $number_emp;
    public $location;

    public function __construct ($departments, $mgr_name, $number_emp, $location) {
               $this->departments = $departments;
               $this->mgr_name = $mgr_name;
               $this->number_emp = $number_emp;
               $this->location = $location;
    }
    protected function dep_info () {
        echo "Department Name: ".$this->departments."<br>"."Manager Name: ".$this->mgr_name."<br>"."Total Employees: ".$this->number_emp."<br>"."Location: ".$this->location;
    }
} 
class AddDepartments extends Departments {
    // public $new_dep;
    // public $location;
    public function add_dep_info () {
        return $this->dep_info ();
        // $this->new_dep = $new_dep;
        // $this->location = $location;
        // echo "New Department Name is :".$this->new_dep."<br>"." & Department Location : ".$this->location;
    }
}
$dep_details = new AddDepartments('ICT Department','Mr. Ferdows Alam','20 Employees','2nd Floor HO');
// $dep_details->add_dep_info('Finunce','3rd Floor');
$dep_details->add_dep_info ();*/

//help with Arman
/*class Music {
    public $bangla;
    public $english;
    public $hindi;

     public function __construct ($bangla, $english, $hindi) {
        $this->bangla = $bangla;
        $this->english = $english;
        $this->hindi = $hindi;
     }
     public function newAlbumList () {
       echo $this->bangla.$this->english.$this->hindi;
     }

     public function add ($a) {
        return 5 + $a;
     }

}
class MusicChild extends Music {
       public $othersMusic;
       public function __construct ($bangla, $english, $hindi, $othersMusic) {
        $this->othersMusic = $othersMusic;
        $this->bangla = $bangla;
        $this->english = $english;
        $this->hindi = $hindi;
       }
       public function output () {
        return $this->othersMusic.$this->bangla.$this->english.$this->hindi;
        }

        public function newAlbumList () {
            echo 'Method Overiding';
          }
        public function add ($a) {
            return 5 * $a;
         }
}

$album = new MusicChild ('Hasan','Omit','Ranu','Rifat');
echo $album->add (6);*/

//const 

/*class MyClass {
    const myVariable = "This my const Class and Object";
    function myFunction () {
            return self :: myVariable;
    }
} 
// echo MyClass :: myVariable;
$myobject = new MyClass ();
echo $myobject->myFunction ();*/

//Abstruct 

/*abstract class MyAbstract {
    public $myMessage;
    public function __construct ($message) {
        $this->myMessage = $message;
    }
    abstract public function myVoice ();
}
class ChildAbstract extends MyAbstract  {
    public function myVoice () {
        return "He told us ".$this->myMessage."!";
    }
}
$myVoice = new ChildAbstract('Politic is activity of a Evil person');
echo $myVoice->myVoice ();*/

//Interface
// https://www.youtube.com/watch?v=pItY-cACEng

/*interface MyInterfaceClass {
    public function myInterfaceFunc ();
}
class MyInterfaceChildClass implements MyInterfaceClass {
    public function myInterfaceFunc () {
        echo "This is my Country Baangladesh";
    }
}
$MyInterfaceObject = new MyInterfaceChildClass ();
echo $MyInterfaceObject->myInterfaceFunc ();
Note : 
1. all mathod will be "public" in Interface class.
https://www.w3schools.com/php/php_looping_foreach.asp*/


// Interface 2 Example
// https://www.youtube.com/watch?v=pItY-cACEng

/*interface MyInterFaceClass {
    public function MyInterfaceFunction ();
}

class myChildInterfaceClassOne implements MyInterFaceClass {
    public function MyInterfaceFunction () {
        echo "Hello JavaScript";
    }
}

class myChildInterfaceClassTwo implements MyInterFaceClass {
    public function MyInterfaceFunction () {
        echo "Hello JSON";
    }
}
class myChildInterfaceClassThree implements MyInterFaceClass {
    public function MyInterfaceFunction () {
        echo "Hello PL/SQL";
    }
}
class myChildInterfaceClassFour implements MyInterFaceClass {
    public function MyInterfaceFunction () {
        echo "Hello CSS";
    }
}
$opjectOne = new myChildInterfaceClassOne ();
$opjectTwo = new myChildInterfaceClassTwo ();
$opjectThree = new myChildInterfaceClassThree ();
$opjecFour = new myChildInterfaceClassFour ();

$InterFaceArray = array($opjectOne, $opjectTwo, $opjectThree, $opjecFour );
 foreach ($InterFaceArray as $value)
 echo $value->MyInterfaceFunction ()."<br>";*/


 //Trait 

/*trait Php_programming {
    public function Php_progFunc () {
        echo "PHP Programming";
    }
}
trait Sql_programming {
    public function SQL_progFunc () {
        echo "SQL Programming";
    }
}
trait JavaScript_programming {
    public function JavaScript_progFunc () {
        echo "JavaScript Programming";
    }
}
trait Json_programming {
    public function Json_progFunc () {
        echo "Json Programming";
    }
}

class all_programming {
    use Php_programming;
    use Sql_programming;
    use JavaScript_programming;
    use Json_programming;
}

$SoftwareEng = new all_programming ();
$SoftwareEng->Php_progFunc ();
echo "<br>";
$SoftwareEng->JavaScript_progFunc ();
echo "<br>";
$SoftwareEng->Json_progFunc ();
echo "<br>";
$SoftwareEng->SQL_progFunc ();*/

// Static
// Static Properties and Static Methods in PHP OOP Bangla Tutorial | PHP Object Oriented Programming -9
// https://www.youtube.com/watch?v=n7dGhyrIjeQ
/*class StaticClass {
    public static $myProperties = "Satatic";
}
echo StaticClass :: $myProperties;*/

//Static 2 Example

/*class StaticClass {
    static public $myStaticProperties = "Static method";
    public function StaticFunc (){
        return "This is a :" .self :: $myStaticProperties ;
    }
}
$myStaticObject = new StaticClass ();
echo $myStaticObject->StaticFunc ();*/

//Static Method

/*class myStaticClass {
    public static function StaticMethodFunc () {
        echo "This is Static Method";
    }
    public function myStaticFunc () {
        self :: StaticMethodFunc ();
    }
}
$MethodObject = new myStaticClass();
$MethodObject->myStaticFunc ();*/

// Static Method use to Another Closs

/*class StaticMethod1 {
    public static function MethodFunc1 () {
        echo "Method Function";
    }
}
class StaticMethod2 {
    public function MethodFunc2 () {
        StaticMethod1 :: MethodFunc1 ();
    }
}
$MethodObject = new StaticMethod2 ();
$MethodObject->MethodFunc2 ();*/

// Static Method use to Another Child Closs

/*class StaticMethod1 {
    public static function MethodFunc1 () {
        echo "Method Function";
    }
}
class StaticMethod2 extends StaticMethod1 {
    public function MethodFunc2 () {
       parent :: MethodFunc1 ();
    }
}
$MethodObject = new StaticMethod2 ();
$MethodObject->MethodFunc2 ();*/

// Array
// Associative Array
$age = array('Zinnah'=>35,'Arman'=>33,'Fuad'=>29,'Delower'=>29,'Mahfuj'=>34);

echo "Programmers age is :".$age ['Arman']. "Years old";

foreach ($age as $r=> $age) {
    echo $r." is old ".$age;
    echo "<br>";
}

// Multidymentional Array:


 ?>