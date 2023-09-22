<?php
    require "../connection/connection.php";
    if(isset($_POST['send'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile) && !empty($message)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO feedback (firstname,lastname,email,mobile,message) VALUES('$firstname','$lastname','$email','$mobile','$message')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/contact.php?error=false");
            }
            else{
                header("location:../admin/contact.php?error=1");
            }
        }
        else{
            header("location:../admin/contact.php?error=1");
        }
    }
    else{
        die('error');
    }
?>