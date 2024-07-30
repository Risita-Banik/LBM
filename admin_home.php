<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>

  <style>
             body img{
        position: absolute;
        left:80%;
        top:60%;
    }
 table, tr, td
            {
                margin: auto;
                padding: 10px;
                border: 3px solid darkblue;
                border-collapse: collapse;
                width: 50%;
            }
th
            {
                padding: 10px;
                border: 3px solid darkblue;
                border-collapse: collapse;
                color: black;
 }

.tab {
  float: left;
  border: 1px solid black;
  background-color: rgb(25 ,25 ,124);
  width: 25%;
  height: 100%;
  position: fixed;
}
.tab h1{
  text-align: center;
}
.tab i{
  padding: 250px 160px;
  font-size: 32px;
}

 /*Style the buttons that are used to open the tab content*/ 
.tab a {
  display: block;
  background-color: inherit;
  color: white;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.6s;
  font-size: 20px;
}
.tab a{
 text-decoration: none;
 color:white;
}


/* Change background color of buttons on hover */
.tab a :hover {
  background-color:rgb(70, 70, 233);
  border: 2px solid black;
  border-radius: 5px;

}

 /*Style the tab content*/ 
.tabcontent {
  float: right;
  padding: 50px 12px;
  width: 75%;
  border-left: none;
  height: 100%;
  
}
.tab .active {
  background-color: white;
  border: none;
  border-right: none;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  text-align: center;
  color: black;
  border-top-right-radius: 0px;
}

</style>
<script>
   
</head>
<body>
    
<div class="tab">
        <h1 style="color: #fff;">DASHBOARD<hr></h1>
        <a href="admin_table.jsp" style="color:black;" class="active">Admin Table</a>
        <a href="user.jsp">User Table</a>
        <a href="cruise.jsp">Cruise Table</a>
        <a href="booking_details.jsp">Booking Details Table</a>
        <a href="room_details.jsp">Room Details Table</a>
        <a href="cruise_add.jsp">Cruise Add</a>
        <i class="fa-solid fa-right-from-bracket"></i>
    </div>
  
  <div id="admin" class="tabcontent">
 
            
  </div>
  
  <div id="user" class="tabcontent">
            
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
  
  <div id="books" class="tabcontent">
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
    <div id="issued_book" class="tabcontent">  
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
               
   <div id="room_details" class="tabcontent">
                
    </div>
  <script>
    function opentable(evt, tablename) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i =0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tablename).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
</body>
</html>