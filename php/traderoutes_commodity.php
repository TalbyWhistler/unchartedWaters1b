<?php 
    include 'db_operations.php';
    //$payload='traderoutesCommodity';
    $input=file_get_contents('php://input');
    $decode=json_decode($input,true);
    // var_dump($input);
    $output=array("payload"=>getCitiesPerCommodity($decode['commodity']));
    //echo $decode['commodity'];
    echo json_encode($output);
?>