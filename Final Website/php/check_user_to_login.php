<?php

    function check_user() // this method return true if the user exict and start a session , otherwise it will return false
    {
        global $all_users;
        global $email_user;
        global $password_user;
        
        $is_user_available = false;
            
        foreach($all_users as $user_to_check)
        {
            if($user_to_check->getEmail() == $email_user and $user_to_check->getPassword() == $password_user)
            {
                echo 'found';
                $_SESSION['user'] = $user_to_check;
                
                $is_user_available = true;
                break;
            }
        }
        return $is_user_available;
    }


?>