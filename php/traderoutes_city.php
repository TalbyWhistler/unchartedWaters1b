<?php 
        include 'dbtest.php';
        $inputPayload=file_get_contents('php://input');
        $city=$inputPayload;
        $output = tradeRoutesByCity($city);
        echo $output;



?>