<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Project');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Project Updated');</script>";
    }
    elseif($_GET['error'] == 'none'){
        echo "<script>alert('Project Deleted');</script>";
    }
    elseif($_GET['error'] == '3'){
      echo "<script>alert('Error cannot process');</script>";
  }
    else{
        echo "<script>alert('Project Added');</script>";
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
    <h1> Add Services </h1>
    </div>
    <div class="container">
  <form action="../authen/backendservice.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="sid"> Service ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="sid" name="sid" placeholder="Enter  Service ID">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Enter ID">
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
        <select id="service_type" name="service_type">
          <option value="Select">--Select--</option>
          <option value="window cleaning" >window cleaning</option>
          <option value="water tank cleaning">water tank cleaning</option>
          <option value="Kitchen cleaning">Kitchen cleaning</option>
          <option value="painting services">painting services</option>
          
        </select>
      </div>
    </div>
  
    <!-- <div class="row">
      <div class="col-25">
        <label for="start_date">Service Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="service_date" name="service_date" placeholder="Enter Service Date">
      </div>
    </div> -->

    <!-- <div class="row">
      <div class="col-25">
        <label for="service time">Service Time</label>
      </div>
      <div class="col-75">
        <input type="text" id="service_time" name="service_time" placeholder="Enter Service Time">
      </div>
    </div> -->
    
    <div class="row">
      <button type="submit" value="Add" name="add" id="add">Add</button>
    </div>
  </form>
</div>
    
  </form>
</div>

<table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>Service ID</th>
    <th>ID</th>
    <th>Service Type</th>
    <!-- <th>Service Date</th>
    <th> Service Time</th> -->
    <th colspan="2">Action</th>
  </tr>
  
  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM services";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
        <td>$row[sid]</td>
        <td>$row[id]</td>
        <td>$row[service_type]</td>
        <td><a href='../authen/deleteservice.php?sid=$row[sid]'><input type='submit' value='Delete' class='delete'></a></td>
        <td><a href='../authen/updateservice.php?sid=$row[sid]'><input type='submit' value='Update' class='update'></a></td>
        </tr>
        ";
            }
        ?>

  </table>
    
</body>
</html>
<?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>
<script>
//  function confirmDelete() {
//   return confirm("Are you sure want to delete this data?");
// }
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>
