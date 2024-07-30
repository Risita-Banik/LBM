<?php
include('connect.php');

if(isset($_POST['fine_btn']))
{
    $id=$_POST['user_id'];
    
    $sql="select return_date from issued_book where user_id='$id'";
    $res=mysqli_query($conn,$sql);
    $curr=date("Y/m/d");
    $diff_date=($res - $curr);
    if($diff_date > 0){
        $fine=$diff_date * 50;
    }
    else{
        $fine=0;
    }
while(mysqli_num_rows($res) > 0)
{
echo $fine;
}
}
?>