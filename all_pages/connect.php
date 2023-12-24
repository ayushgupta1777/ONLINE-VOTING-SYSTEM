<?php

//Databaase connection 
 

$server="localhost";
$username="root";
$password="";
$database="online_voting_system";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "success";
}
else{
    die("error" .mysqli_connect_error());
}




?>