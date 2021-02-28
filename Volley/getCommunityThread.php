<?php
include('dbcon.php');

$sql="SELECT * FROM tblcommunity order by thread_date desc";
$result= mysqli_query ($mysqli,$sql);

$data=array();

if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result))  {
             //return true;  
         $data[]=$row;
        
      }
  
    }else{
        $data='failed';
    }


    header('Content-Type:Application/json');
echo json_encode($data);
//print_r($data[0]);
print_r($data);
mysqli_close($mysqli);