<?php
    require "../connection/connection.php";
    if(isset($_POST['submit'])){
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $services = $_POST['services'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($services) && !empty($date) && !empty($time)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO booking (name,email,phone,address,services,date,time) VALUES('$name','$email','$phone','$address','$services','$date','$time')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/booking.php?error=false");
            }
            else{
                header("location:../admin/booking.php?error=1");
            }
        }
        else{
            header("location:../admin/booking.php?error=1");
        }
    }
    else{
        die('error');
    }
?>