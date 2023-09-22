<?php
    // require "../connection/connection.php";
    // if(isset($_POST['Send'])){
        
    //     $firstname = $_POST['firstname'];
    //     $lastname = $_POST['lastname'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['mobile'];
    //     $message = $_POST['message'];
    //     if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile) && !empty($message)){
    //         //$date = date("Y-m-d");
    //         $query = "INSERT INTO feedback (name,email,phone,address,services,date,time) VALUES('$name','$email','$phone','$address','$services','$date','$time')";
    //         $result = mysqli_query($con,$query);
    //         if($result){
    //             header("location:../admin/contact.php?error=false");
    //         }
    //         else{
    //             header("location:../admin/contact.php?error=1");
    //         }
    //     }
    //     else{
    //         header("location:../admin/contact.php?error=1");
    //     }
    // }
    // else{
    //     die('error');
    // }
?>
<?php
 require "../connection/connection.php";
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM booking WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    if ($result){
        header("location:../admin/book.php?error=none");
    }
}
else
{
    die ('error');
}
?>