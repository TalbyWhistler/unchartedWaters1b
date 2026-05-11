<?php 
    //$citiesList=['madrid','paris','moscow'];
    //$citiesArray=["0"=>"madrid","1"=>"moscow","2"=>"paris"];
    include 'db_operations.php';
    $citiesArray=fetchCities();
    
    //$jsonArray=json_encode($citiesArray);
    
    echo $citiesArray;
    //return $output;


?>