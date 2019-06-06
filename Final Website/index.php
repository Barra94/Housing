<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WOONING VOOR U</title>
      <link rel="stylesheet" href="css/index_style.css">
      <link rel="stylesheet" href="css/header_style.css?v=1.0">
      <link rel="stylesheet" href="css/footer_style.css?v=1.0">
      <link rel="stylesheet" href="css/web-fonts-with-css/css/fontawesome-all.css">
    </head>
<body>

<?php
include 'header.php'; 
?>

 <div class="body-container">
      <div id='tab' class="search-div" >
            <ul id="ul_list">
              <li class="s">Rent</li>
              <li>Buy</li>
            </ul>
            <div class="s"> 
                  <p id="search_title">Renting a house</p> 
                  <form action="search_result.php" method="get" id="main_form">
                      <label id="location-label" > Location: </label>
                      <select name="location" class="input-search" id="input-location-select" >
                         <option value="all">All</option>
                         <option value="eindhoven">Eindhoven</option>
                         <option value="amsterdam">Amsterdam</option>
                         <option value="roterdam">Roterdam</option>
                         <option value="utrecht">Utrech</option>
                         <option value="strip_s">strip_s</option>
                      </select><br>   
                      <label id="price-label">  Price: </label>
                      <input type="text" name="minmum_price" class="input-search"  id="input-search1">
                      <input type="text" name="maxcimum_price" class="input-search" id="input-search2">             
                      <br><br>          
                      <input type="radio" name="type" value="house" id="radio-house" checked > House
                      <input type="radio" name="type" value="apartment" id="radio-apartment" > Apartment
                      <input type="radio" name="type" value="studio" id="radio-studio"> Studio<br>
                      <input type="submit" value="Search" id="search-button">
                      <input type="hidden" name="situation" value="rent"/>
                   </form> 
            </div>
            <div>
                  <p id="search_title">Buying a house</p> 
                  <form action="search_result.php" method="get" id="main_form">
                      <label id="location-label" > Location: </label>
                      <select name="location" class="input-search" id="input-location-select" >
                         <option value="all">All</option>
                         <option value="eindhoven">Eindhoven</option>
                         <option value="amsterdam">Amsterdam</option>
                         <option value="roterdam">Roterdam</option>
                         <option value="utrecht">Utrech</option>
                         <option value="strip_s">strip_s</option>
                      </select><br>   
                      <label id="price-label">  Price: </label>
                      <input type="text" name="minmum_price" class="input-search"  id="input-search1">
                      <input type="text" name="maxcimum_price" class="input-search" id="input-search2">             
                      <br><br>          
                      <input type="radio" name="type" value="house" id="radio-house" checked > House
                      <input type="radio" name="type" value="apartment" id="radio-apartment" > Apartment
                      <input type="radio" name="type" value="studio" id="radio-studio"> Studio<br>
                      <input type="submit" value="Search" id="search-button">
                      <input type="hidden" name="situation" value="buy"/>
                   </form> 
            </div>
       </div>

       <div class="three-icons_div">
            <div class="three_icons" id="first_icon">
                <img src="photos/icon edited 1.png">
                <p>Active & Accurate</p>
                <h4>With our marketing and active way of working, we make sure that you will find a suitable tenant of accommodation in a short time.</h4>
            </div>
            <div class="three_icons" id="second_icon">
                <img src="photos/icon edited 3.png">
                <p>Wide range of accommodations</p>
                <h4>We'll make sure that you will find a suitable home in a matter of time! You can't find the correct accommodation? Contact us, so we will start a search so we can find the perfect place for you.</h4>
            </div>   
            <div class="three_icons" id="thierd_icon">
                <img src="photos/icon edited 2.png">
                <p>Email notification</p>
                <h4>As soon as we find an accommodation that fits your profile, we will send you an e-mail alert. Can we make it any easier?</h4>
            </div>
        </div>
</div>
    <script src="js/tabs.js"></script>

<?php
    include 'footer.php';   
?>