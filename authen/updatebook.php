<?php
require "../connection/connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM booking WHERE id = '$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location:../admin/adminlogin.php");
}
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
    <h1> Update Services </h1>
    </div>
    <div class="container">
  <form action="../authen/updatebook1.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" value="<?php echo $row['id']?>" placeholder="Enter ID">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Enter Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" value="<?php echo $row['name']?>" placeholder="Enter name">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Enter Email">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']?>" placeholder="Enter Phone">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" value="<?php echo $row['address']?>" placeholder="Enter Address">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="services">Services</label>
      </div>
      <div class="col-75">
        <input type="text" id="services" name="services" value="<?php echo $row['services']?>" placeholder="Enter Services">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="date">Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="date" name="date" value="<?php echo $row['date']?>" placeholder="Enter Date">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="time">Time</label>
      </div>
      <div class="col-75">
        <input type="text" id="time" name="time" value="<?php echo $row['time']?>" placeholder="Enter Time">
      </div>
    </div>
    
      <div class="row">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
</div>
    </div>
    </body
    </html>

<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
        
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $services = $_POST['services'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    
     if(!empty($name)){
        //$date = date("Y-m-d");
        $query = "UPDATE booking SET name = '$name', email = '$email', phone = '$phone', address = '$address', services = '$services', date = '$date', time = '$time' WHERE id = '$id'";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:../admin/book.php?error=2");
        }
        else{
            header("location:../admin/book.php?error=1");
        }
    }
    else{
        header("location:../admin/book.php?error=1");
    }
 }
else{
    die('error');
}
?>

<script>

function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>
