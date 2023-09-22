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