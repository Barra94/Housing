<?php


    $dsn = 'mysql:hostname=localhost ; dbname=test';
    $user_name = '';
    $password = '';
    $msg_problem=null;
    $bottom_value='Singin'; // &nbsp; to print space between sing up in html

    ob_start();

    try
    {
        $connect = new PDO($dsn , $user_name , $password , array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    }
    catch(PDOException $e)
    {
        echo "There is a problem conecting to the database";
    }

?>