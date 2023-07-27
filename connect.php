<?php

$fistname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "smart_cleaners") or die("connection failed");
$sql = "INSERT INTO customers(firstname, lastname, Email, Mobile, Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}','{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location:contact.php");
mysqli_close($conn);
?>