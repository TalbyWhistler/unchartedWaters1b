<?php 
        include 'dbconnect.php';
        include 'db_operations.php';
        $commodityRaw=file_get_contents('php://input');
        
        
        
        $commodity=explode(":",$commodityRaw)[1];
        $commodity=explode("}",$commodity)[0];

        $info=queryCommoditiesInfo($commodity);
        
        $manualJson='{"payload":"'.$info.'"}';
       
        echo $manualJson;

?>