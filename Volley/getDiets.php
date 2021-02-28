<?php
include('dbcon.php');

$sql="SELECT * FROM tblposts where archive != '1' order by date_posted desc";
$result= mysqli_query ($mysqli,$sql);

$data=array();

if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result))  {
             //return true;  
         $data[]=$row;
        
      }
  
    }else{
        $data='failed';
        die("json_encode fail: " . json_last_error_msg());
    }


    header('Content-Type: Application/json');
echo json_encode($data);


//print_r($data[3]);
mysqli_close($mysqli);