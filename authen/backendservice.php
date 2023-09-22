<?php
    require "../connection/connection.php";
    if(isset($_POST['add'])){
        
        $sid = $_POST['sid'];
        $id = $_POST['id'];
        $service_type = $_POST['service_type'];
        if(!empty($service_type) && !empty($id)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO services (sid,id,service_type) VALUES('$sid','$id','$service_type')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/resource.php?error=false");
            }
            else{
                header("location:../admin/resource.php?error=1");
            }
        }
        else{
            header("location:../admin/resource.php?error=1");
        }
    }
    else{
        die('error');
    }
?>