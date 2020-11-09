<?php

  $conn = mysqli_connect('localhost', 'root' , '', 'test');

  if ($conn == false) {
     die("error : could  not join" . mysql_connect_error()  );
  }

  $sql= " INSERT INTO information(first_name ,last_name,email) 
   VALUES ('learn' , ' hunter' , 'zubairbinf@gmail.com'),

          ('mani' , ' jumi' , 'zuba88irbinf@gmail.com'),
   
          ('nani' , ' mjiud' , 'zubai77rbinf@gmail.com'),

          ('zubair' , ' foui' , 'zubairtrt7rbinf@gmail.com'),

          ('kala' , ' okmi' , 'zubairbgdrinf@gmail.com'),
                                                                
          ('jana' , ' mihi' , 'zubairbinfftgf@gmail.com') ";

          
  if (mysqli_query($conn , $sql )) {
      echo "ok done";
  }else{
      echo"data wrong";
  }

  mysqli_close($conn);




?>