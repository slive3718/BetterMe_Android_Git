<?php
$host="localhost";
$localname="u668467760_betterme";
$localpass="Betterme123";
$database="u668467760_betterme";



$mysqli=new mysqli($host,$localname,$localpass,$database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  

