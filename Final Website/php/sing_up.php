<?php
include 'database_connection.php';
include 'users.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['first_name']))
    {
        $first_name = $_POST['first_name'];
    }

    if(isset($_POST['last_name']))
    {
        $last_name = $_POST['last_name'];
    }

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }

    if(isset($_POST['password']))
    {
        $password = $_POST['password'];
    }

    if(isset($_POST['repasswrod']))
    {
        $repassword = $_POST['repasswrod'];
    }

    if(users::is_email_exict($connect , $email))
    {
        header("location: ../signup.php?email_exist=true");
        exit();
    }
    else
    {
        if($password == $repassword)
        {
            $user_to_add = new users($first_name, $last_name, $email, $password , 1);

            if($user_to_add->create() == 1)
            {
                header("location: ../successfully_registered.php");
                exit();
            }
            else
            {
                header("location: ../signup.php?user_added_successfully=false");
                exit();
            }
        }
        else
        {
            header("location: ../signup.php?password_not_match=true");
            exit();
        }
    }
}

?>