<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WOONING VOOR U</title>
      <link rel="stylesheet" href="css/header_style.css?v=1.0">
      <link rel="stylesheet" href="css/footer_style.css?v=1.0">
      <link rel="stylesheet" href="css/web-fonts-with-css/css/fontawesome-all.css">
      <link rel="stylesheet" href="css/profile_style.css">
    </head>
<body>

<?php
   include 'header.php';
   function __autoload($user)
   {
       include  'php/users.php';
   }
?>
    
<?php
if(isset($_SESSION['user']) == false)
{
     header("location: login.php");
     exit();
}
?>

<div class="body-container">       
    <div class="profile_div">       
        <form class="prfile_form">
            <h3 id="label-profile">My Profile</h3><br>
            <p>First name is : <?php echo $_SESSION['user']->getFirstName(); ?> </p>
            <p>Last name is : <?php echo $_SESSION['user']->getLastName(); ?></p>
            <p>Email is : <?php echo $_SESSION['user']->getEmail(); ?></p>
        </form>
     </div>
</div>

<?php
    include 'footer.php';   
?>

              