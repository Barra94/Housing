<?php

include 'database_connection.php';
include 'house.php';

function Search_houses()
{

$location="all";
$minmum_price=-1;
$maxcimum_price=-1;
$type="1";
$situation="1";

if(isset($_GET['location']) and $_GET['location'] != null)
{
    $location = $_GET['location'];
}

if(isset($_GET['minmum_price']) and $_GET['minmum_price'] != null)
{
    $minmum_price = $_GET['minmum_price'];
}

if(isset($_GET['maxcimum_price']) and $_GET['maxcimum_price'] != null)
{
    $maxcimum_price = $_GET['maxcimum_price'];
}

if(isset($_GET['type']) and $_GET['type'] != null)
{
    $type = $_GET['type'];
}

if(isset($_GET['situation']) and $_GET['situation'] != null)
{
    $situation = $_GET['situation'];
}

$search_array_houses = house::search($location,$minmum_price,$maxcimum_price,$type,$situation);

    
    return $search_array_houses;
}


?>