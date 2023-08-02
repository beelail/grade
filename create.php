<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation</title>
    <link rel="stylesheet" href="creation.css">
    
</head>
<body>
    
<div class="header">
       
       <a class="home" href="1.html"><b>Home</b></a>
       <label class="p">
         <h1 class="o">C</h1>
         <h1 class="o">R</h1>
         <h1 class="o">E</h1>
         <h1 class="o">A</h1>
         <h1 class="o">T</h1>
         <h1 class="o">E</h1>
         </label>
         <div class="aboutus">
               <a ><b>Aboutus</b></a> </div>
       <div class="cantact">
            
           <b>CantactUs</b>
           <div class="content">
               <p>Email : @gamil.com<br> Phone : +21626382150</p>
           </div>
       </div>
</div>
 
  

 <div class="container">

  <form id="form" name="form"  method="POST" >

            <div class="code">
                <label><h4>Code</h4></label>
                <input id="code"class="input" name="code1"type="text" maxlength="3">
                <h3 id="small">CODE Invalide</h3>
            </div>
            <div class="labelle">
                <label> <h4>Label</h4></label>
            <input id="labelle"class="input" name="labelle1" type="text" maxlength="50" required>
            </div>

         <div class="button">
         <button class="bt"type="submit"><b>Create</b></button>
         <button class="bt"type="reset"> <b>Reset</b> </button>
         </div>
    </div>
  </form>
</div>


 <div class="footer">
        &copy; All rights reserved</div>
 </body>

<script type="text/javascript">


    const form =document.getElementById('form');
    form.addEventListener('submit',function(e) {
   if ( verify()== false )
   {
    e.preventDefault();
   }

  })

  function verify(){
    const cont=document.getElementById('code');
    const code=cont.parentElement;
    if (test(cont)==0)
    {
        showerror(code,'code must 3 digits ! ');
        return false ; 
    }
    else if (test(cont)==2)
    {
       showerror(code,'code must be all numbers  !');
       return false  ; 
    }
    else {return true ; }

  }
    
   function showerror(code , message)
    {   
        var small=document.getElementById('small').innerHTML=message; 
         code.className="code invalide";
        
    }

    function test(cont)
    {
        if (cont.value.length != 3 ) {return 0; }
        else {
            var t=1  ; 
            for (var i =0  ; i < cont.value.length ; i++)
            { 
                if (isNaN(cont.value[i])) {t = 2; }
            }
            return t  ; 
        }
    }

</script>

</html>
<?php 
$db_username='root';
$db_password=''; 
$db_name='PERSONNEL';
$db_host='localhost';

$db= mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');

if (isset($_POST['code1']) && isset($_POST['labelle1']))
{
$code=$_POST['code1']; 
$LABELLE =$_POST['labelle1'];
 
$req="INSERT INTO GRADE VALUES('$code','$LABELLE')";

 if (mysqli_query($db,$req)){
    echo "<script>
    const cont=document.getElementById('code');
    const code=cont.parentElement;
     showerror(code,'code created ! ');</script>
     ";
  
 }
else {
    echo "<script>
    const cont=document.getElementById('code');
    const code=cont.parentElement;
     showerror(code,'code already exist ! ');</script>
     ";
 }
  

}
   mysqli_close($db);



?>
