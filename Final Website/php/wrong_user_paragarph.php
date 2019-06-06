<?php

function wrong_user_paragarph()
{
    if($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['login_sucssesfull']) && $_GET['login_sucssesfull'] == 'no')
    {
        return '<p id="wrong_user">Email or password are not correct</p>';
    }   
}

?>