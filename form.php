<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> book</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 

  <!--  Main CSS File -->
  
  <link href="css/form.css" rel="stylesheet">
</head>
<body>
 <div class="fluid">
  <div class="fluid-left">
    <img src="image/creditcard.jpg"  width="700", height="621">
</div>
  <div class="fluid-right">
 <div class="container">
<h2>Log-in to your account</h2>
 &nbsp;&nbsp;&nbsp;&nbsp;<div class="abw">
 <form class="login" action="#login" method="post">
 <div class="segments">
<div class="inline-fields">
<!--label>Type of User</label-->&nbsp;&nbsp;
</div>
</div>
<div class="amn">
<label>Mobile NO.<span class="req">*</span></label>

<input placeholder="mobile" name="mobile" id="mobile_num" type="number"  value=""  >

</div>

<div class="require">
<label>Password<span class="req">*</span></label>

<input type="password" placeholder="Password" name="password"id="psw">

</div>
<div class="login">
<button type="submit" class="button" id="btn" ><b>Login</b></button>

</div><br>
<h3 style="color: blue;font-weight: 200;margin-left:inherit; float:right;margin-top:-18px;"><u>Forgot Password?</u></h3>
<a href="reg.php"><h3 style="color: blue;font-weight: 200;margin-left:inherit; float:left;margin-top:-18px;"><u>New User Signup</u></h3></a>

 </form>
  
 </div>
 </div>
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
    <script>  
           $(document).ready(function(){
             $('#btn').click(function(){
             var mobile_num= $('#mobile_num').val();
             var psw= $('#psw').val();
        if(mobile_num.length<10){
          alert("Not a Vlaid number")
        }
        else if(psw.length<8){
            alert("Please Enter valid password")
        }
        else
        {
          alert("login Successful");
        }
      
  });
           });
        </script>  

</body>
</html>
