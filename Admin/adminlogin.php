<?
session_start();
include ("../all_pages/connect.php");
if(isset($_SESSION['admin'])){
    header('location: /dashboard.php');
    }
if (isset($_POST['L
ogin'])){
    $sql="SELECT * FROM 'admin' WHERE 'Username'='$_POST[admin]' AND 'Password'='$_POST[password]' ";
   $result= mysqli_query($conn,$sql) ;
   if (mysqli_num_rows($result)==1){
     while ($userdata= mysqli_fetch_array($result,MYSQLI_ASSOC)){
        print_r($userdata);
       $_SESSION['admin']= $_POST['admin'];
       $_SESSION['admin']= $_POST['password'];
       $_SESSION['admin']= $userdata;
         header("location: dashboard.php");
         
        }
    }
    else{
        echo 
        `<script>
           alert("User not found!");
           window.location="login.html";
        </script>
         `;
    }
}

?>