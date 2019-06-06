<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WOONING VOOR U</title>
      <link rel="stylesheet" href="css/header_style.css?v=1.0">
      <link rel="stylesheet" href="css/footer_style.css?v=1.0">
      <link rel="stylesheet" href="css/web-fonts-with-css/css/fontawesome-all.css">
      <link rel="stylesheet" href="css/signup_style.css">
    </head>
<body>

<?php
   include 'header.php';
   include 'php/sing_up_messege.php';
?>

<div class="body-container">       
    <div class="register">
            <h3 class="span_test" id="signup-label">Sign Up</h3>   
            <form class="Register" method="post" action="php/sing_up.php">
                          <span>First Name </span>  
                          <input  type="text" id="firstname-input" name="first_name" placeholder="First Name" required><br><br/>
                          <span>Last Name </span>
                          <input  type="text" id="Last-Name-input" name="last_name" placeholder="LastName" required><br><br/>
                          <span> Email </span> 
                          <input  type="email" id="Email-signup-input" name="email" placeholder="Enter your Email" required><br><br/>
                          <span> Password</span>
                          <input  type="password" id="password1-input" name="password" placeholder="Enter yor Password"required><br><br/>
                          <span>Confirm Password</span>
                          <input  type="password" id="password2-input" name="repasswrod" placeholder="Enter yor Password" required><br><br/>
                          <input type="submit" id="signup-button" value="Sing Up"> 
             </form>
        <?php Show_messege(); ?>
     </div>     
</div>

<?php
    include 'footer.php';
?>
