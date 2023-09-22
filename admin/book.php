<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty booking');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Booking Updated');</script>";
    }
    elseif($_GET['error'] == 'none'){
        echo "<script>alert('Booking Deleted');</script>";
    }
    else{
        echo "<script>alert('Booking Added');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>
<body>
    <header class="header">
    <h2>Admin Dashboard</h2>
    </header>
    <aside>
        <ul>
            <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="../admin/resource.php">Manage Services</a>
            </li>
            <li>
                <a href="../admin/book.php">Manage Booking</a>
            </li>
            <li>
                <a href="../admin/response.php">Manage Feedback</a>
            </li>
            <li>
            <a href="../admin/adminlogin.php" onclick = 'return Logout()'>
            <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
            Sign Out</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Booking Services </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">  
      <tr class="heading">  
           
           <th>ID</th>  
           <th>Name</th>   
           <th>Email</th>  
           <th>Phone</th>   
           <th>Addres</th>
           <th>Cleaning Services</th>
           <th>Date</th>
           <th>Time</th>
           <th colspan="2">Action</th>
      </tr>  
      <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM booking";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['services']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['time']."</td>";
        echo "<td><a href='../authen/deletebook.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "<td><a href='../authen/updatebook.php?id=".$row['id']."'><input type='submit' value='Update' class='update'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>

    <?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>