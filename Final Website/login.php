<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WOONING VOOR U</title>
      <link rel="stylesheet" href="css/login_style.css">
      <link rel="stylesheet" href="css/header_style.css?v=1.0">
      <link rel="stylesheet" href="css/footer_style.css?v=1.0">
      <link rel="stylesheet" href="css/web-fonts-with-css/css/fontawesome-all.css">
    </head>
<body>


<?php
   include 'header.php';  
   include 'php/wrong_user_paragarph.php';
?>

 <div class="body-container">
      <div class="login-div" >    
        <form class="login_form" method="POST" action="php/check6.php">
               <h3 id ="label-login">LogIn</h3><br>       
               <label for="E-mail" id="label-email">E-mail   </label>
               <input type="email" id="Email" name="email" placeholder="Enter your Email" required><br><br />
               <label for="password" id="labe-password">Password </label> 
               <input type="password" id="password" name="password" placeholder="Enter yor Password" required><br>
               <input type="submit"  value="Login" id="login-button"> <br>       
        </form>
          <?php echo wrong_user_paragarph(); ?>
     </div>
  </div>

<?php
    include 'footer.php';
?>