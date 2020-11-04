*<!DOCTYPE html>
<html>
<head>
<title>php programming learn hunter</title>

<style media="screen">
  body{

    font-size: 24px;
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
  echo "<br>";
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
  echo "<br>";
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
















 ?>




</body>

</html>
