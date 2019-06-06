<?php

function generate_nav_bar()
{   
    if(isset($_SESSION['user']))
    {
       return '
                <ul class="nav-list">
                    <li><a href="index.php">Home </a>| </li>
                    <li><a href="search_result.php">&nbsp; Our Offers </a>| </li>
                    <li><a href="about_us.php">&nbsp; About Us </a>| </li>
                    <li><a href="contact_us.php">&nbsp; Contact Us </a>| </li>
                    <li><a href="profile.php">&nbsp; Profile </a>| </li>
                    <li><a href="php/singout22.php">&nbsp; Singout </a></li>        
                </ul>
            ';
    }
    else
    {
        return '
                    <ul class="nav-list">
                    <li><a href="index.php">Home </a>| </li>
                    <li><a href="search_result.php">&nbsp; Our Offers </a>| </li>
                    <li><a href="about_us.php">&nbsp; About Us </a>| </li>
                    <li><a href="contact_us.php">&nbsp; Contact Us </a>| </li>
                    <li><a href="login.php">&nbsp; Log In </a>| </li>
                    <li><a href="signup.php">&nbsp; Sing Up </a></li>        
                </ul>
            ';

    }
}
   
   
?>