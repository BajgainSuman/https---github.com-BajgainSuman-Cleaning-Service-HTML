<?php
require "../connection/connection.php";
$sid = $_GET['sid'];
$query = "SELECT * FROM services WHERE sid = '$sid'";
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
  <form action="../authen/updateservice.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="sid"> Service ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="sid" name="sid" value="<?php echo $row['sid']?>" placeholder="Enter Service ID">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="id"> ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" value="<?php echo $row['id']?>" placeholder="Enter ID">
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
        <label for="s_type">Service type</label>
      </div>
      <!-- <div class="col-75">
        <input type="text" id="service_type" name="service_type" placeholder="Enter Service Type">
      </div> -->
    <!-- </div> -->
      <div class="col-75">
        <select id="service_type" name="service_type"  value="<?php echo $row['service_type']?>">
          <!-- <option value="Select">--Select--</option> -->
          <option value="window cleaning" >window cleaning</option>
          <option value="water tank cleaning">water tank cleaning</option>
          <option value="Kitchen cleaning">Kitchen cleaning</option>
          <option value="painting services">painting services</option>
          
        </select>
      </div>
      <div class="row">
      <input type="hidden" name="sid" value="<?php echo $row['sid']?>">
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
        
    $sid = $_POST['sid'];
    $id = $_POST['id'];
    $service_type = $_POST['service_type'];
    
    if(!empty($service_type)){
        //$date = date("Y-m-d");
        $query = "UPDATE services SET id = '$id', service_type = '$service_type' WHERE sid = '$sid'";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:../admin/resource.php?error=2");
        }
        else{
            header("location:../admin/resource.php?error=3");
        }
    }
    else{
        header("location:../admin/resource.php?error=3");
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
