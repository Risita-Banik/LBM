
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
    <div class="container1">
        <h1>User Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
            <input type="email" class="email" name="email" required >
                <span></span>
                <label>Username</label>
                </div>
                <div class="txt_field">
                <input type="password" class="password" name="password" required >
                <span></span>
                <label>Password</label>
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
    $password=$_POST['password'];
    $sql="select * from user where email='$email' and password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $count=mysqli_num_rows($res);
        if($count>0)
        {
           echo "Pass Ok";
         ?>
         <script>
            alert ("Password is ok, Login Sucessfull");
            </script>
         <?php
         $_SESSION['email']=$email;
         header('Location:user_home.php');
        }
        else
        {
           echo "Pass Not Ok";
         ?>
         <script>
            alert ("Password is Wrong, Login not Done");
            </script>
         <?php
        }

    }

}

?>
