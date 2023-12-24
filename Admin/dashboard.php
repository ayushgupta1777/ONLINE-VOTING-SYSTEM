<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online voting system</title>
    <style>
        body{
        background:linear-gradient(135deg, #71b7e6,#9b59b6);
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
    </style>
</head>
<body>
<a href="logout.php"><button id="logout-btn">Logout</button> </a>
    <h1 class="heading">Admin Dashboard </h1>
    <hr>
</body>
</html>
<?php
session_start();
$session_admin = $_SESSION['admin'];


?>