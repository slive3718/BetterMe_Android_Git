<?php
$host="localhost";
$localname="root";
$localpass="";
$database="betterme";



$mysqli=new mysqli($host,$localname,$localpass,$database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  

