<?php
    require "../connection/connection.php";
    
    if(isset($_GET['sid'])){
        $sid = $_GET['sid'];
        $query = "DELETE FROM services WHERE sid = '$sid'";
        $result = mysqli_query($con,$query);
        if ($result){
            header("location:../admin/resource.php?error=none");
        }
    }
    else
    {
        die ('error');
    }
?>