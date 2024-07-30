<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container1" style="width: 900px; height:600px;">
        <h1>User Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="full_name" required>
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="id" required>
                <span></span>
                <label>ID</label>
            </div>
            <div class="txt_field">
                <input type="text" name="batch" required>
                <span></span>
                <label>Batch</label>
            </div>
            <div class="txt_field">
                <input type="text" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <!-- <div class="txt_field">
                <input type="text" name="c_password" required>
                <span></span>
                <label>Confirm Password</label>
            </div> -->
            <div class="txt_field">
                <input type="text" name="dob" required>
                <span></span>
                <label>DOB</label>
            </div>
            <div class="txt_field">
                <input type="text" name="age" required>
                <span></span>
                <label>Age</label>
            </div>
        <input type="submit" value="Login" name="submit">
        </form> 
    </div>
    
</body>
</html>

<?php


if(isset($_POST['submit']))
{


$email=$_POST['email'];
$full_name=$_POST['full_name'];
$id=$_POST['id'];
$batch=$_POST['batch'];
$password=$_POST['password'];
// $c_password=$_POST['c_password'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$sql="INSERT INTO `user` (`email`, `name`, `id`, `batch`, `password`, `dob`, `age`) VALUES ('$email', '$name', '$id', '$batch', '$password', '$dob', '$age')";
$res=mysqli_query($conn,$sql);
if($res)
{
    $_SESSION['status']="Records Added Successfully";
    $_SESSION['batch']=$batch;
    header('Location:user_signin.php');
}
else
{
    $_SESSION['status']="Records Not Added ";
    header('Location:user_signup.php');  
}
}
?>