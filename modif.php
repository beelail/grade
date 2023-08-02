<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="creation.css">
    
</head>
<body>
         
<div class="header">
       
       <a class="home" href="1.html"><b>Home</b></a>
       <label class="p">
         <h1 class="o">C</h1>
         <h1 class="o">H</h1>
         <h1 class="o">A</h1>
         <h1 class="o">N</h1>
         <h1 class="o">G</h1>
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

  <form id="form" name="form" onsubmit="done()" method="GET" >

            <div class="code">
                <label><h4>Code</h4></label>
                <input id="code1"class="input" name="code1"type="text"  onkeyup="find(this.value)"  maxlength="3"  required>
                <h3 id="small">CODE Invalide</h3>
            </div>
            <div class="labelle">
                <label> <h4>Label</h4></label>
            <input id="labelle1"class="input" name="labelle1" type="text" maxlength="50" required >
            </div>

         <div class="button">
         <button class="bt"type="submit"><b>Modify</b></button>
         <button class="bt"type="reset"> <b>Reset</b> </button>
         </div>
    </div>
  </form>
</div>


 <div class="footer">
        &copy; All rights reserved</div>
 </body>

<script type="text/javascript">


function find(str) {
if(str.length==3) {

var  xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","find.php?q="+str,true);
 xmlhttp.send();
 xmlhttp.onreadystatechange= function() {
 if(this.readyState == 4  && this.status==200) {
 document.getElementById("labelle1").value=this.responseText;

 }
};
}
}

function done(){
    event.preventDefault(); 
    var c= document.getElementById('code1');
    if (confirm("Are you  sure you want to change this code!") == true) {
    var l =document.getElementById("labelle1").value;
    var  xmlhttp = new XMLHttpRequest();   
    xmlhttp.open("GET",`do.php?q=${encodeURIComponent(l)}!${encodeURIComponent(c.value)}`,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange= function() {
    if(this.readyState == 4  && this.status==200) {
         showerror(c.parentElement,this.responseText);

 }
};
}
else {
    showerror(c.parentElement,"Operation cancelled !");
}
}

const form =document.getElementById('form');
    form.addEventListener('submit',function(e) {
   if ( verify()== false )
   {
    e.preventDefault();
   }

  })

  function verify(){
    const cont=document.getElementById('code1');
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
