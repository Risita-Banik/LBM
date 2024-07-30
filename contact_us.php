<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
 <title>Document</title>
</head>
<body>
 <div class="container1">
 <h1>Contact Us</h1>
 <form action="" method="POST">
 <div class="txt_field">
 <input type="text" name="fname" required>
 <span></span>
 <label>Full Name</label>
 </div>
 <div class="txt_field">
 <input type="text" name="email" required>
 <span></span>
 <label>Email</label>
 </div>
 <div class="txt_field">
 <input type="number" name="ph_no" required>
 <span></span>
 <label>Phone No</label>
 </div>
 <div class="input-containertextarea">
 <textarea name="message" class="input"></textarea>
 <p>Messege</p>
 
 </div>
 <input type="submit" name="submit" value="Send">
 </form> 
 </div> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone_no=$_POST['ph_no'];
$message=$_POST['message'];
$sql="INSERT INTO `contact` (`fname`, `email`,`ph_no`,`message`) VALUES ('$fname','$email','$phone_no','$message')";
$res=mysqli_query($conn,$sql);
if($res)
{
 $_SESSION['status']="Records Added Successfully";
 header('Location:user_home.php');
 ?>
 <script>
 window.alert ("Thank you for contact with us");
 </script>
 <?php
}
else
{
 $_SESSION['status']="Records Not Added ";
 header('Location:contact_us.php');
 ?>
 <script>
 window.alert ("Failed");
 </script>
 <?php
}
}
?>