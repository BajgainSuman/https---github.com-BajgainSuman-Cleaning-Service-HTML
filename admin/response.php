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
    <h1> Customer Feedback </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">  
      <tr class="heading">  
           
           <th>ID</th>  
           <th>First Name</th>   
           <th>Last Name</th> 
           <th>Email</th>  
           <th>Phone</th>   
           <th>Message</th>
           <th>Action</th>
      </tr>  
      <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM feedback";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "<td><a href='../authen/deleteresponse.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>