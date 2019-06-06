<?php

function Show_messege()
{
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if(isset($_GET['email_exist']) and $_GET['email_exist'] == "true")
        {
            echo '<p class="red email_paragraph">This email is exict</p>';
        }
        elseif (isset($_GET['password_not_match']) and $_GET['password_not_match'] == "true")
        {
            echo '<p class="red password_paragraph">Your password does not match</p>';
        }
    }
}

?>