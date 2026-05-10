<?php 
     

function screenPrint($inputString)
{
    echo $inputString;
}


$servername="localhost";
//$servername="%waters";
$username = "webUser1";
$password = "watersWeb";
$dbName = "unchartedWatersb";

$conn = new mysqli($servername,$username,$password,$dbName);

if ($conn->connect_error)
    {
        echo "false";
    }
    else 
        {
            echo "true";
        }


//echo "true";


?>