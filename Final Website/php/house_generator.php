<?php
include "search.php";
function show_houses()
{
    if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['location']))
    {
        $all_houses =  Search_houses();
    }
    else
    {
        $all_houses = house::get_all_houses_by_date();
    }
    
    if(count($all_houses) > 5) // to show only 5 if there are more than 5 houses
    {
        $counter = 5;
    }
    else
    {
        $counter = count($all_houses);
    }

    for ($i = 0; $i < $counter ; $i++)
    {
        echo '<div class="search_result_div"> 
         <div class="search_profile_pic_div">  
           <img src="photos/house-pic.jpg" class="search_house_pic">   
         </div>
         <div class="search_details_div">  
             <table style="width:100%">
                 <tr>
                     <td>House Type : ' . $all_houses[$i]->getHouseType() . '</td>
                     <td>Build Year : ' . $all_houses[$i]->getBuildYear() . '</td>
                 </tr>     
                 <tr>
                    <td>Enertie lapel : ' . $all_houses[$i]->getEnergieLabel() . ' </td>
                    <td>space : ' . $all_houses[$i]->getSpace() . ' </td>
                 </tr>
                 <tr>
                     <td>Balkon : ' . $all_houses[$i]->getBalkon() . '</td>
                     <td>Attic : ' . $all_houses[$i]->getAttic() . '</td>
                 </tr>
                 <tr>
                     <td>Location : ' . $all_houses[$i]->getLocation() . '</td>
                     <td>Price : ' . $all_houses[$i]->getPrice() . '</td>
                 </tr>
             </table> 
             <a href="#">react>></a>     
         </div>        
      </div>  ';
    }
}


//echo($house_to_show->create());


?>