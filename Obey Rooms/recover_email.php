<!doctype html>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css\Registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>signup </title>

  </head>

<?php

if(isset($_POST['submit'])){

$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());


$email= mysqli_real_escape_string($conn,$_POST['email']);



$emailquery= "select * from registration where email='$email'";
$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);







$to_email = "$email";
$subject = "Obey-Rooms";
  $code= rand(100,999);
 
$body = "click on  link and reset the password :)'http://localhost/Obey%20Rooms/new_password.php?email=code=$code'";
$headers = "From: anujkesarwani.sfs@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "";
} else {
    echo "Email sending failed...";
}
  # code...
}
?>


<body class="ok" >

      <div class="silver" >
  <div class="container">
<div class="create">

  <h3 class="account">Recover your Account</H3>
    Please Enter email correctly
    <span><i class="fa fa-smile-o" aria-hidden="true"></i></span>


</div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

<input class="input" type="text" name="email" placeholder="E-mail" required>




<button type="submit" name="submit" class="button">Send Mail</button>
</form>

</form>

<hr>
<div>Have an account with us? <a href="login.php"> Login</a></div>
</div>
</div>



  </body>

  </html>
    
  
    