<?php

include_once 'check_user_to_login.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    session_start();
    
    require_once 'users.php';
    
    require_once 'database_connection.php';
    
    $email_user = -1;
    $password_user = -1;

    
    if(isset($_POST['email']))
    {
        $email_user=$_POST['email'];
    }
    
    if(isset($_POST['password']))
    {
        $password_user=$_POST['password'];
    }
    
    
    
    $all_users = users::get_all();
    
    
    if(check_user())
    {
        echo '<pre>';
        print_r($_SESSION['user']);
        echo '</pre>';
        
        header("location: ../index.php"); //to redirect back to "index.php" after logging out
        exit();
    }
    else
    {
        echo "not available.";
        
        header("location: ../login.php?login_sucssesfull=no"); //to redirect back to "index.php" after logging out
        exit();

    }
}
else
{
    echo 'You are not allouwd to enter this page.';
}


?>