<?php   
 include 'connection.php';  
 $query = "select * from customers";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <style>
        *{  
      padding: 0;  
      margin: 0;  
      box-sizing: border-box;  
 }  
 body{  
      width: 100%;  
      height: 100vh;  
      background-color: #34495e;  
      position: relative;  
      font-family: 'verdana',sans-serif;  
 }  
 header{  
      width: 100%;  
      height: 80px;  
      background-color: #2c3e50;  
 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: #FFFF;  
 }  
 .data td{  
      padding: 15px 0;  
 }  
 #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 5px 20px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  
      </style>
 </head>  
 <body>  
 <header></header>  
 <table border="3" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>S No</th>  
           <th>ID</th>  
           <th>First Name</th>  
           <th>Last Name</th>  
           <th>Email</th>  
           <th>Mobile</th>  
           <th>Message</th>  
           <th colspan="2">Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['id']."</td>  
                               <td>".$result['firstname']."</td>  
                               <td>".$result['lastname']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['mobile']."</td>  
                               <td>".$result['message']."</td>  
                               <td><a href='update_design.php?id=".$result['id']."' id='btn'>Update</a></td>
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  