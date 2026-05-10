<?php 
    $city='';
    $commodity='';
    $buyingPrice='';
    $sellingPrice='';

    $payload='';
    $message='';
    $raw=file_get_contents('php://input');
    $data = json_decode($raw,true);
    if (isset($data['operation']))
        {
            $status='Ok';
            $message=$message.'Operation:' .$data['operation'];
        }
        else 
            {
                $status='Error';
                $message=$message.' operation isn\'t set';
            };
    
    if (isset($data['payload']['city']))
        {
            $status='Ok';
            $message=$message.' payload set';
            $payload= $data['payload'];
            $city=$data['payload']['city'];
            $commodity=$data['payload']['commodity'];
            $buyingPrice=$data['payload']['buyingPrice'];
            $sellingPrice=$data['payload']['sellingPrice'];
            $message="Commodity data for " .$city. " uploaded. ";
            // DB OPERATIONS here?

        }
        else 
            {
                $status='Error';
                $message='Payload missing';
            }
        
    //$status='Ok';

    //$operation='hey noe';
    //$message = $message . urldecode(file_get_contents('php://input'));
    //$
    $outputJson='
    {
        "status":"'.$status.'",
        "message":"'.$message.'"
    }
    ';
    echo $outputJson;


?>