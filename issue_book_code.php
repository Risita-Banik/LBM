<?php
include('connect.php');

if(isset($_POST['del_btn']))
{
    $book_name=$_POST['book_name'];
    $sql="delete from issued_book where book_name='$book_name'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $session['status']="deletion sucessfull";
        header('Location:issued_book_master.php');
    }
    else
    {
        $session['status']="deletion  not sucessfull";
        header('Location:issued_book_master.php');

    }
}

?>