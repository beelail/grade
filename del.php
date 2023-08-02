<?php 
$code=$_REQUEST["q"];
$db_username='root';
$db_password=''; 
$db_name='PERSONNEL';
$db_host='localhost';
$db= mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');

$req="delete from  GRADE  WHERE CODEGRD='$code'";
 
      if (mysqli_query($db,$req)){

        
        if(mysqli_affected_rows($db)){
                $m = "code has been deleted  !"; 
                  mysqli_close($db);  
        }
    else {
                 $m = "code do not exist ! "; 
                 mysqli_close($db);  
              }
 
 echo $m ;
            }     

 


?>