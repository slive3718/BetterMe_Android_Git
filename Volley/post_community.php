<?php
include ('dbcon.php');

$threadTitle=filter_input(INPUT_POST,"threadTitle");
$userid=filter_input(INPUT_POST,"userid");
$date=date("Y-m-d h:i:s"); 
$content=filter_input(INPUT_POST,"content");


$result= mysqli_query ($mysqli,"INSERT INTO tblcommunity (thread_title,thread_content,thread_user_id,thread_date) VALUES ('$threadTitle','$content','$userid','$date')");

        if ($result){
            $data="success";
        }else{
            $data="failed";
        }

        print_r($date);
echo json_encode($data);
?>