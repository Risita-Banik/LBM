<?php
include('connect.php');

if(isset($_POST['profile_edit_btn']))
{
$id=$_POST['id'];
$email=$_POST['email'];
$name=$_POST['name'];
$batch=$_POST['batch'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$age=$_POST['age'];


    $sql="update user set email='$email',name='$name',password='$password',dob='$dob',age='$age' where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['status']="Modification sucessfull";
        header('Location:admin_dash.php#book');
    }
    else
    {
        $_SESSION['status']="Modification  not sucessfull";
        header('Location:admin_dash.php#book');

    }
}


?>