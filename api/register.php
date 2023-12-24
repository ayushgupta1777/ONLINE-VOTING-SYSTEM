<?php
error_reporting(0);
include ("../all_pages/connect.php");
?>
<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$number =$_POST['number'];
$password =$_POST['password'];
$cpassword = $_POST['cpassword'];
$age = $_POST['age'];
$address = $_POST['address'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$UploadImage = $_FILES['photo']['name'];
$tmp_name =$_FILES ['photo']['tmp_name'];
$existsql="SELECT * FROM voters WHERE Number='$number'";
$result=mysqli_query($conn,$existsql);
$numExistRow=mysqli_num_rows($result);
if($numExistRow > 0){
  echo '
  <script>
  alert("Number Already Exist");
  window.location="../all_pages/register.html";
  </script>';
}
else{
if ($password!==$cpassword){
 echo '
   <script>
     alert("Password and Confirm password dose not match");
     window.location="../all_pages/register.html";
   </script>
 ';
}
else{
  move_uploaded_file($tmp_name, "../uploads/,$UploadImgae");
  $insert = "INSERT INTO voters  VALUES ('0','$name','$number','$password','$age','$address','$city','$gender','$email','$UploadImage',0)";
  $rs=mysqli_query($conn, $insert);
  if($rs){
    echo '
    <script>
      alert("Registration Successfull!");
      window.location="../all_pages/login.html";
    </script>
   ';
 }else{
  echo '
  <script>
  alert("Some error occurs ");
  window.location="../all_pages/register.html";
  </script>
  ';
 }
}
}
}
?>