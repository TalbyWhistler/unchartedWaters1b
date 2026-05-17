<?php 
       // include 'db_operations.php';
        include 'dbtest.php';
        $input=file_get_contents('php://input');
        $inputArray=json_decode($input,true);
        $commodity=$inputArray["commodity"];
        $output=tradeRoutesByCommodityB($commodity);
        echo $output;


?>