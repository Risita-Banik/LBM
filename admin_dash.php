<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="admin.css">

</head>
<body>

    <section id="menu">
        <div class="logo">
            
            <h2>DASHBOARD</h2>
        </div>

        <div class="items">
            <li><a href="#user">user</a></li>
            <li><a href="#book">book</a></li>
            <li><a href="#issued_book">issued_book</a></li>
            <li><a href="userdetails.jsp">User Details</a></li>
            <li><a href="login.jsp">Log Out</a></li>
        </div>
    </section>

<section id="interface">
        <div id="user">
        <h3 class="i-name">
            user
        </h3>
        <div class="board">
        <center><u><h1>All users</h1></u></center>
<div>
 <?php
 //if($_SESSION['status']!=" " or $_SESSION['status'])
 ?>
 <!--<h2><?php echo $_SESSION['status']?> </h2>-->
 <?php
 unset($_SESSION['status']);?>
 <table class="table">
 <thead>
 
 <th>email</th>
 <th>name</th>
 <th>id</th>
 <th>batch</th>
 <th>dob</th>
 <th>age</th>
 </thead>
 <tbody>
 <?php
 $sql="select * from user";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
 ?>
 <tr>
 <td><?php echo $row['email']?></td>
 <td><?php echo $row['name']?></td>
 <td><?php echo $row['id']?></td>
 <td><?php echo $row['batch']?></td>
 <td><?php echo $row['dob']?></td>
 <td><?php echo $row['age']?></td>
 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
</div>   
 </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <div id="book">
        <h3 class="i-name">
            book
        </h3>
        <div class="board">
        <h1>Book Status</h1>
<div>
 <a href="book_insert.php"><button class="btn btn-dark">Add New book</button></a>
 <?php
 //if($_SESSION['status']!=" " or $_SESSION['status'])
 ?>
 <!--<h2><?php echo $_SESSION['status']?> </h2>-->
 <?php
 unset($_SESSION['status']);?>
 <table class="table">
 <thead>
 <th>book_id</th>
 <th>book_name</th>
 <th>author_name</th>
 <th>price</th>
 <th>quantity</th>
 
 <th>edit</th>
 <th>delete</th>
 </thead>
 <tbody>
 <?php
 $sql="select * from book";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
 ?>
 <tr>
 <td><?php echo $row['book_id']?></td>
 <td><?php echo $row['book_name']?></td>
 <td><?php echo $row['author_name']?></td>
 <td><?php echo $row['price']?></td>
 <td><?php echo $row['quantity']?></td>
 
 <td>
 <form action="book_update.php" method="POST">
 <input type="text" hidden value="<?php echo $row['book_id']?>" name="book_id">
 <input type="submit" value="edit" class="btn btn-info"name="book_edit_btn">
 </form>
 </td>
 <td>
 <form action="book_code.php" method="POST">
 <input type="text" hidden value="<?php echo $row['book_id']?>" name="book_id">
 <input type="submit" value="Delete" class="btn btn-danger"name="book_del_btn">
 </form>
 
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
</div>        
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div id="issued_book">
        <h3 class="i-name">
            issued_book
        </h3>
        <div class="board">
        <table class="table">
 <thead>
 
 <th>user_id</th>
 <th>book_name</th>
 <th>issued_date</th>
 <th>return_date</th>
 
 </thead>
 <tbody>
 <?php

 $sql="select * from issued_book";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
 ?>
 <tr>
 
 <td><?php echo $row['user_id']?></td>
 <td><?php echo $row['book_name']?></td>
 <td><?php echo $row['issued_date']?></td>
 <td><?php echo $row['return_date']?></td>
 
 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>