<?php

$db_username='root';
$db_password=''; 
$db_name='PERSONNEL';
$db_host='localhost';

$db= mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');

    $req="SELECT* FROM GRADE";
      $result = mysqli_query($db, $req);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edition sur écran</title>
    <link rel="stylesheet" href="edition.css">


</head>
<div class="header">
       
       <a class="home" href="1.html"><b>Home</b></a>

       <button class="p" onclick="window.print()">
         <h1 class="o">P</h1>
         <h1 class="o">R</h1>
         <h1 class="o">I</h1>
         <h1 class="o">N</h1>
         <h1 class="o">T</h1>
       </button>
       <div class="aboutus">
        <a ><b>Aboutus</b></a> </div>
       <div class="cantact">
           <b>CantactUs</b>
           <div class="content">
               <p>Email : @gamil.com<br> Phone : +21626382150</p>
           </div>
       </div>
</div>
 

<body>
    <div class="container">
     <table id="table"class="table" border="1">
        <th class="title">CODE</th>
        <th class="title">LABEL</th>
        <?php 
        while($row=mysqli_fetch_row($result))
        { 
             echo"<tr>\n";
            echo" <td> <h4 class='info'>$row[0]</h4> </td>\n";
            echo" <td> <h4 class='info'>$row[1]</h4> </td>\n";
            echo"</tr>\n";
          }
        ?>

     </table>
    </div>
     <div class="footer">
        &copy; All rights reserved</div>
</body>
</html>


