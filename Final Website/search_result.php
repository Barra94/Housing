<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WOONING VOOR U</title>
      <link rel="stylesheet" href="css/header_style.css?v=1.0">
      <link rel="stylesheet" href="css/footer_style.css?v=1.0">
      <link rel="stylesheet" href="css/search_result_style.css?v=1.0">
      <link rel="stylesheet" href="css/web-fonts-with-css/css/fontawesome-all.css">
    </head>
<body>

<?php
    include 'header.php'; 
    include 'php/house_generator.php';
?>

<div class="body-container"> 
      <div class="about_us_title">
          <h2>Search result(s)</h2>
      </div>

      <?php
           show_houses();
      ?>;

     <div id="pagging-div">
        << 1 , 2 , 3 , 4 , 5 >>  
     </div>      
</div>

<?php
    include 'footer.php';  
?>

