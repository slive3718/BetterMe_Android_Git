<?php
include('dbcon.php');
// $data = $_REQUEST;


// foreach ($request as $key=>$requests){


// }
// echo json_encode($key.$data);


$username=filter_input(INPUT_POST,"username");
$password=filter_input(INPUT_POST,"password");

$hash = password_hash($password, PASSWORD_DEFAULT);

$data = array();
$result= mysqli_query($mysqli,"SELECT * FROM tblusers where username ='".$username."'");
   
        if(mysqli_num_rows($result)>0){
  
          while($row = mysqli_fetch_array($result))  {

            if(password_verify($password, $row["password"]))  
            {  
                 //return true;  
                 //$data='success';
                  $data['userId']=$row;
                  $data['success']='success';
            }  
            else{
              $data='failed';
            }
          }
      
        }else{
            $data='failed';
        }
        
    



print_r($data);
echo json_encode($data);
?>