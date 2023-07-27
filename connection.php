<?php
$conn = mysqli_connect("localhost","root","","smart_cleaners") or die($conn);  
if ($conn) {  
     echo "connection Succesfuly";  
}else{  
     echo "Something Error";  
}  
?>