<?php

session_start();
include ("../all_pages/connect.php");
if(isset($_POST['submit'])){
$number=$_POST['number'];
$password=$_POST['password'];
$sql= "SELECT * FROM voters WHERE Number='$number' AND Password='$password'";
$result=mysqli_query($conn,$sql);


if($result->num_rows > 0){
     $userdata= mysqli_fetch_array($result);
     $_SESSION['userdata']= $userdata['userdata'];
     
    //echo ' 
    //<script>
//  window.location="../all_pages/dashboard.php";
   // </script>
  // ';
}else{ 
  echo '
  <script>
    alert("User not found!");
    window.location="../all_pages/login.html";
  </script>
';

}
}



?>