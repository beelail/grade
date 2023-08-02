<?php

$q=$_REQUEST["q"];
$db_username='root';
$db_password=''; 
$db_name='PERSONNEL';
$db_host='localhost';

$db= mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');
 
    $req="SELECT * FROM GRADE WHERE CODEGRD='$q'";
      $result = mysqli_query($db, $req);
      if ($result) {
         $row = mysqli_fetch_array($result);
      

if (isset($row) && is_countable($row) ) 
 {      
  $m = $row[1]; 
    mysqli_close($db);  

}
else {
   $m = "code do not exist !"; 
   mysqli_close($db);  
}
}     
echo $m;

   ?>