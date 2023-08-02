<?php 
$q=$_REQUEST["q"];
$coord=explode("!",$q);
if(strlen($coord[1])==3){
$db_username='root';
$db_password=''; 
$db_name='PERSONNEL';
$db_host='localhost';
$db= mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');

    $req="update  GRADE set LABGRD='$coord[0]' where CODEGRD='$coord[1]' ";
 
      if (mysqli_query($db,$req)){

        
        if(mysqli_affected_rows($db)){
                $m = "code has changed !"; 
                  mysqli_close($db);  
        }
    else {
                 $m = "code has the same labelle !"; 
                 mysqli_close($db);  
              }
 
 echo $m ;
            }     

 
          }

?>

