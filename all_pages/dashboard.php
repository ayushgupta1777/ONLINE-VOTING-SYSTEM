<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['user_login'])){
    header("location: login.html");
}

$session_user = $_SESSION['user_login'];


if($session_user['status']==0){
    $status='<b style="color:red">Not Voted</b>';
}else{
    $status='<b style="color:green">Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body{
        background:linear-gradient(135deg, #71b7e6,#9b59b6);
        /*width:95%;*/
    }
    body a #logout-btn{
        float : right;
        margin-left: 20px;
        margin-top: 10px;
        padding: 5px;
        font-weight: 600;
        font-size: 15px;
        background-color: rgba(80, 241, 80, 0.836);
        color: black;
        border-radius: 5px;
    }
      .heading{
        text-align:center;
        
    }
    .profile{
        background-color: #fff;
        width: 30%;
        padding: 20px;
        
    }
    </style>
</head>
<body>
 <a href="logout.php"><button id="logout-btn">Logout</button> </a>
    <h1 class="heading">Voter Dashboard </h1>
    <hr>
<div class="profile">
   <center> <img src="../uploads/<?php echo $session_user['UploadImage'] ?>" height="100" width="100" ><br> </center>
    <b>Name : </b><?php echo $session_user['Name']?><br><br>
    <b>Number : </b><?php echo $session_user['Number']?><br><br>
    <b>Age : </b><?php echo $session_user['Age']?><br><br>
    <b>Address : </b><?php echo $session_user['Address']?><br><br>
    <b>City : </b><?php echo $session_user['City']?><br><br>
    <b>Gender : </b><?php echo $session_user['Gender']?><br><br>
    <b>Email : </b><?php echo $session_user['Email']?><br><br>
    <b>Status : </b><?php echo $status?><br><br>
</div>
</body>
</html>
