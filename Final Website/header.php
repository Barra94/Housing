<?php
session_start();
require_once 'php/database_connection.php';
include_once 'php/nav_bar_generator.php';
?>

<header>
     <div class="website-container">   
            <div class="logo-div">     
               <img src="photos/logo-edited.png" id="logo-img">      
            </div>
            <div class="nav_div">
                <ul class="nav-list">
                    <?php
                        echo generate_nav_bar();
                    ?>       
                </ul>
           </div>
           <div class="image-header">
             <img src="photos/header-foto.jpg" id="header-img">
           </div>
      </div>
</header>