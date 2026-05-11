<?php

//use Dba\Connection;

    function checkForEntry(string $city,string $commodity)
    {
        include 'dbconnect.php';
        $returnValue=false;
        $stmt=$conn->prepare("SELECT city,commodity,buyingPrice,sellingPrice from commodities where city=? and commodity=?;");
        $results='';
        $numberOfRows='';
        if ($stmt)
        {
          //  echo '<br>Statement success';
            $stmt->bind_param("ss",$city,$commodity);
        }
        else 
            {
             //   echo '<br>Statment fail';
            }
        
        if ($stmt->execute())
            {
                $results=$stmt->get_result();
            }
        if ($results)
            {
                $numberOfRows=$results->num_rows;
            }
        if ($numberOfRows>0)
            {
                $returnValue=true;
                return $returnValue;
            }
        return $returnValue;
    }

    function insertEntry($city,$commodity,$buyingPrice,$sellingPrice)
    {
        $returnValue=false;
        include 'dbconnect.php';
        $stmt=$conn->prepare("INSERT INTO COMMODITIES VALUES(?,?,?,?);");
        $stmt->bind_param("ssii",$city,$commodity,$buyingPrice,$sellingPrice);
        if ($stmt->execute())
            {
                $returnValue=true;
            }

        return $returnValue;
    }

    function updateEntry($city,$commodity,$buyingPrice,$sellingPrice)
    {
        $returnValue=false;
        include 'dbconnect.php';
        $stmt=$conn->prepare("update commodities set city=?,commodity=?,buyingPrice=?,sellingPrice=?;");
        $stmt->bind_param("ssii",$city,$commodity,$buyingPrice,$sellingPrice);
        if ($stmt->execute())
            {
                $returnValue=true;
            }
        return $returnValue;
    }

    /*
    include 'php/dbconnect.php';
    echo "<br>dbTest";
    $city='madrid';
    $commodity='grain';

    $stmt=$conn->prepare("SELECT city,commodity,buyingPrice,sellingPrice from commodities where city=? and commodity=?;");
    if ($stmt)
        {
            echo '<br>Statement success';
            $stmt->bind_param("ss",$city,$commodity);
        }
        else 
            {
                echo '<br>Statment fail';
            }
    $result='';
    $assoc='';
    if ($stmt->execute())
        {
            echo '<br>Statment executed';
            $result=$stmt->get_result();
            
        }
        else 
            {
                echo '<br>Execution issue';
            }
    
    if ($result->num_rows>0)
        {
            echo'</br>Results';
            while($row=$result->fetch_assoc())
                {
                    echo '</br>'.$row["city"].' '.$row["commodity"].' '.$row["buyingPrice"].' '.$row["sellingPrice"];                
                }
        }
        else 
            {
                echo '</br>No Results';
            }
    */
            // testvalues
   // $city="dublin";
  //  $commodity="grain";
   // $buyingPrice=34;
  //  $sellingPrice=46;
    /*
    if(checkForEntry($city,$commodity))
        {
            echo '</br>Record Present';
            echo '</br> Updating: '.updateEntry($city,$commodity,$buyingPrice,$sellingPrice);
        }
        else 
            {
                echo '</br>Record not present';
                echo '</br> Inserting:'.insertEntry($city,$commodity,$buyingPrice,$sellingPrice);
            }        
   */
?>