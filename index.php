<!DOCTYPE html>
<html>
<head>
<title>php programming learn hunter</title>

<style media="screen">
  body{

    font-size: 22px;
    padding: 50px;

  }
</style>
</head>

<body>

<?php

  echo "hello world";

  echo "<br>";

  print "zubair is best";

  $a=10;
  $b=20;
  $g=30;

  if($a>$b) {
      echo "ok i am good";
  }elseif($b>$g){
      echo "ok this is not good";
  }else{
    echo "zubair is good";
  }
  echo "<br>";

  $name = "zubair bin ferdous";

  $email = "zubairbinf@gmail.com";


  echo $name;
  echo "<br>";
  echo "$email";
  echo "<br>";


  // ******************************************
  // ******************************************

  echo "<br>";

  $name_tital="datatypes";

   // string
   // integer
   // float
   // boolean
   // array
   // object
   // null
   // resoures


  echo "$name_tital";
  echo "<br>";


  $game = "valorent";
  var_dump($game);

  echo "<br>";

  $num = 1000;
  var_dump($num);


  echo "<br>";

  $numk = 10.009;
  var_dump($numk);


  echo "<br>";

  $nu = true;
  var_dump($nu);


  echo "<br>";

  $array = array("sali","manu","kalo" );
  var_dump($array);


  // ******************************************
  // ******************************************


  echo "<br>";


  $a="zubair bin ferdous is one of the best developer";
  echo "$a";
  echo "<br>";
  echo strlen($a);

  echo "<br>";

  echo str_word_count($a);

  echo "<br>";

  echo strrev($a);

  echo "<br>";

  echo strpos($a, "best");

  echo "<br>";

  echo str_replace("best","good","$a");

  echo "<br>";

  define ("learn","php programming language basic");
  echo learn;


  // ******************************************
  // ******************************************

  echo "<br>";
  echo "<br>";
  echo "<br>";


  $name_tital="oparator";

  // arithemetic
  // assigment
  // comparison
  // increment oparator/decerment oparetor
  // logical
  // string
  // array

  echo "$name_tital";
  echo "<br>";
  // ******************************************
  // ******************************************

  echo "<br>";
  echo "<br>";


  echo " arithemetic // + ,- ,* ,/ ,% ,** ";
  echo "<br>";

  $b=22;
  $m=22;

  $y=$b+$m;
  echo $y;



  echo "<br>";
  echo "<br>";
  echo " assingment// =  =+ , =- , =* , =/ , =% , =**  ";
  echo "<br>";


  $m=20;
  $m +=30;
  echo "$m";


  echo "<br>";
  echo "<br>";
  echo " comparrison //  == , === , !=, <> , !==, < > , >= , <= " ;
  echo "<br>";

  $a=2200;
  $b=2200;

  var_dump($a >= $b);

  echo "<br>";


  echo "<br>";
  echo "<br>";
  echo " increment/decrement //  ++$m , $m++, --$m, $m-- " ;
  echo "<br>";


  $a=10;

  echo ++$a;
  echo "<br>";
  echo "$a";


  echo "<br>";
  echo "<br>";
  echo " condition" ;
  echo "<br>";


  $q=200;

  if ($q == 10) {
    echo "ok this is right";
  }elseif ($q == 20) {
    echo "ok this is wrong";
  }else {
    echo"ok this is accident";
  }


  echo "<br>";
  echo "<br>";
  echo " logical oparator > AND OR XOR && || !=  " ;
  echo "<br>";


  $a=10;
  $v=20;
  $h=30;

  // if ($a == 10 && $v == 20 && $h == 30 ) {
  //   echo "ok , all are fine";
  // }else{
  //   echo "something is wrong";
  // }

  if ($a == 10 XOR $v == 200  ) {
    echo "ok , all are fine";
  }else{
    echo "something is wrong";
  }



  echo "<br>";
  echo "<br>";
  echo " string oparator >   .   .=    " ;
  echo "<br>";


  $a="love you ";
  $b="zubair";
  $c="valorent";

  // echo $a ." ".$b;

   echo $a .= $c;


   echo "<br>";
   echo "<br>";
   echo " Array  oparator" ;
   echo "<br>";


   $a = array('$a' => "learn", '$b' => "hunter",'$c' => "is best" );
   $b = array('onack' , 'tomaka', 'valobaci');

   print_r($b);
   echo "<br>";
   var_dump($a != $b);


   echo "<br>";
   echo "<br>";
   echo " switch case " ;
   echo "<br>";


   $a= "zubi" ;
   switch ($a) {
     case 'learn':
          echo "ok i find it";
       break;
     case 'home':
         echo "ok i find home";
       break;
     case 'love':
           echo "ok i find love";
       break;
     case 'zubi':
        echo "ok zubair is good boy";
       break;
     default:
        echo "something is wrong";
       break;
   }




   echo "<br>";
   echo "<br>";
   echo " loop " ;
   echo "<br>";


   // while loop
   // do while loop
   // for lope
   // for each loop



   echo "<br>";

   $b=1;

   while ($b <= 10) {
      echo "number is : $b ";
      $b++;
   }



   echo "<br>";
   echo "<br>";
   echo " do while loop " ;
   echo "<br>";
   echo "<br>";


   $a=1;

   do {
     echo " number is : $a ";
     $a++;
   } while ($a <= 10);


   echo "<br>";
   echo "<br>";
   echo " for loop " ;
   echo "<br>";
   echo "<br>";



   for ($a=1; $a <= 10 ; $a++) {
      echo " number is : $a ";
   }


   echo "<br>";
   echo "<br>";
   echo " for each loop " ;
   echo "<br>";
   echo "<br>";


   $names = array( 'zubair' , 'mitu' , 'prity', 'marjan', 'onamika', 'mim', 'naeim', 'marjan' , 'yutemi' );

   foreach ($names as $name) {
     echo "$name <br>";
   }



   echo "<br>";
   echo "<br>";
   echo " function " ;
   echo "<br>";
   echo "<br>";


function learn(){
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
  echo "learn hunter is best youtube <br>";
}
learn();




  function zubair($developer , $roll)
  {
  echo "$developer my roll $roll";
  }

  zubair('is a good programmer', '1073');



  echo "<br>";
  echo "<br>";
  echo " index array" ;
  echo "<br>";
  echo "<br>";


  $name = array('sohel', 'manu', 'malia', 'hloi', 'faruq', 'jamal');

  // echo $name[5];
  // echo "<br>";
  // echo count($name);

  $learn = count($name);

  for ($i=0; $i < $learn ; $i++) {
    echo $name[$i];
    echo "<br>";

  }


  echo "<br>";
  echo "<br>";

  $same= array('one'=>'siam', 'two'=>'mitu', 'tree'=>'jahid');
  print_r($same);


   echo "<br>";
   echo "<br>";
   echo " variable scope" ;
   echo "<br>";



   $h=100;

   function all(){
    $k=20;
    echo $k;
    echo "<br>";
   }

   function  kill(){
    global $h;
    $l=250;
    echo $l;
    echo "<br>";
    echo "$h";

   }

   all();
   kill();



   echo "<br>";
   echo "<br>";
   echo " super Global variable " ;
   echo "<br>";

   // $Globals
   // $_server
   // $_request
   // $_post
   // $_get
   // $_files
   // $_env
   // $_cookie
   // $_session


   $o=50;
   $u=20;


  function llee(){

    $GLOBALS ['p'] = $GLOBALS['o'] + $GLOBALS['u'];

  } 
    llee();
    echo "$p";




   echo "<br>";
   echo "<br>";
   echo " SERVER " ;
   echo "<br>";




       echo $_SERVER['PHP_SELF'];
   echo "<br>";

       echo $_SERVER['SERVER_ADDR'];
   echo "<br>";

       echo $_SERVER['SERVER_NAME'];
   echo "<br>";

       echo $_SERVER['SCRIPT_NAME'];
   echo "<br>";

       echo $_SERVER['HTTP_USER_AGENT'];
   echo "<br>";

       echo $_SERVER['SERVER_SOFTWARE'];
   echo "<br>";

       echo $_SERVER['SERVER_ADMIN'];
   echo "<br>";

       echo $_SERVER['REQUEST_METHOD'];
   echo "<br>";


   echo "<br>";
   echo "<br>";
   echo "post" ;
   echo "<br>";
   echo "<br>";

 ?>

  <?PHP

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $email    = $_REQUEST['email'];
      $password = $_REQUEST['password'];

      if (empty($email)) {
            echo "plz enter a email ";
      }

      
      if (empty($password)) {
        echo "plz enter a password ";
  }
      
      
      else {
         echo $email;
         echo "<br>";
         echo $password;
      }

    }


  ?>

  <form action="" method="POST">

    <input type="text" name="email" placeholder="email address"><br><br>
    <input type="password" name="password" placeholder="email address"><br><br>
    <input type="submit" value="Done">

  </form>

  <a href="hunter.php?msg=zubairbin ferdous is a good programmer">learn</a>




</body>

</html>
