<?php

session_start();
include ("../all_pages/connect.php");
if(isset($_SESSION['user_login'])){
  header('location: ../all_pages/dashboard.php');
  }
if(isset($_POST['login'])){
$number=$_POST['number'];
$password=$_POST['password'];

$sql= "SELECT * FROM voters WHERE Number='$number' AND Password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0){
 while ($userdata= mysqli_fetch_array($result,MYSQLI_ASSOC)){
   print_r($userdata);
  $_SESSION['user_login']= $number;
  $_SESSION['user_login']= $password;
  $_SESSION['user_login']= $userdata;
  
  
  header("location: ../all_pages/dashboard.php");
}
}
else{ 
 echo '
 <script>
   alert("User not found!");
   window.location="../all_pages/login.html";
 </script>
';

} 

}

?>