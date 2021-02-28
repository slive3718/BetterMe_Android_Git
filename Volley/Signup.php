<?php
include ('dbcon.php');

$username=filter_input(INPUT_POST,"username");
$password=filter_input(INPUT_POST,"password");

$email=filter_input(INPUT_POST,"email");
$account_type="0";
$hash = password_hash($password, PASSWORD_DEFAULT);



$result= mysqli_query ($mysqli,"INSERT INTO tblusers (username,password,email,account_type) VALUES ('$username','$hash','$email','$account_type')");

        if ($result){
            $data="success";
        }else{
            $data="failed";
        }

        
echo json_encode($data);
?>