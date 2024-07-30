<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>JSP Page</title>
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

        

    </head>
    <body>
    <div class="tab">
        <h1 style="color: #fff;">DASHBOARD<hr></h1>
        <a href="user_master.php" >user Table</a>
        <a href="book_master.php">book Table</a>
        <a href="issued_book_master.php">Isuued Book Table</a>
        <a href="book_insert.php" style="color:black;" class="active">Book Insert</a>
        <a href="issue_book.php" >Book Request</a>
        <i class="fa-solid fa-right-from-bracket"></i>
    </div>
        <div id="user" class="tabcontent">
        <h1>User Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="book_name" required>
                <span></span>
                <label>Book Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="author_name" required>
                <span></span>
                <label>Author Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="price" required>
                <span></span>
                <label>price</label>
            </div>
            <div class="txt_field">
                <input type="text" name="quantity" required>
                <span></span>
                <label>Quantity</label>
            </div>
            <div class="txt_field">
                <input type="text" name="dept" required>
                <span></span>
                <label>Department</label>
            </div>
            <div class="txt_field">
                <input type="text" name="sem" required>
                <span></span>
                <label>Semester</label>
            </div>
        <input type="submit" value="submit" name="submit">
        </form>   </div>
    </body>
</html>

<?php


if(isset($_POST['submit']))
{


$book_name=$_POST['book_name'];
$author_name=$_POST['author_name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$sql="INSERT INTO `book` (`book_name`, `author_name`, `price`, `quantity`, `dept`, `sem`) VALUES ('$book_name', '$author_name', '$price', '$quantity', '$dept','$sem')";
$res=mysqli_query($conn,$sql);
if($res)
{
    $_SESSION['status']="Records Added Successfully";
    header('Location:book_insert.php');
}
else
{
    $_SESSION['status']="Records Not Added ";
    header('Location:book_insert.php');  
}
}