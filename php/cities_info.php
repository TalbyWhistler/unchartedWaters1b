<?php 
        include 'dbconnect.php';
        include 'db_operations.php';
        $cityRaw=file_get_contents('php://input');
        $cityJson=json_decode($cityRaw,true);
        $cityArray=json_encode($cityJson);
        //$city=$cityJson;
        $testValue="madrid";
        $testString="testo";
        //$testValue=(string)strlen($testString);
        //$city=substr($cityRaw,1,15);
        $city=explode(":",$cityRaw)[1];
        $city=explode("}",$city)[0];

        $info=queryCitiesInfo($city);
        //$testValue=explode()
        

       // $payloadTest=gettype($cityRaw[1]);
        //$info=queryCitiesInfo($testValue);
        //$info=$payloadTest;
        //$info=$cityJson;
        //$info=explode(", ",$cityRaw);
        $manualJson='{"payload":"'.$info.'"}';
        //$cityValue=$cityJson["city"];
        //$info=queryCitiesInfo($cityValue);
        //echo $cityJson;
        echo $manualJson;

?>