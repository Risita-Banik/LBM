<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
 $row=mysqli_fetch_assoc($res);
 $id=$row['id'];
$email=$row['email'];
$name=$row['name'];
$batch=$row['batch'];
$password=$row['password'];
$dob=$row['dob'];
$age=$row['age'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <title>Document</title>
</head>
<body>
<form action="profile_update.php" method='POST'> 
<table>
<TR><td>id</td><td><input type="text" name='id' value=<?php echo $id; ?> readonly></td></TR>
 <TR><td>email</td><td><input type="text" name='email' value=<?php echo $email; ?> readonly></td></TR>
 <TR><td>Name</td><td><input type="text" name='name' value=<?php echo $name; ?> readonly></td></TR>
 <TR><td>Batch</td><td><input type="text" name='batch' value=<?php echo $batch; ?> readonly></td></TR>
 <TR><td>Password</td><td><input type="text" name='password' value=<?php echo $password; ?> readonly></td></TR>
 <TR><td>dob</td><td><input type="text" name='dob' value=<?php echo $dob; ?> readonly></td></TR>
 <TR><td>age</td><td><input type="text" name='age' value=<?php echo $age; ?> readonly></td></TR> 
</table>
<input type="submit" value="Update" class="btn btn-info">
</form>
</body>
</html>