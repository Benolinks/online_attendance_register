<?php


require 'database.php';

$sql = "SELECT * FROM `register` "; 
$result = mysqli_query($connection,$sql);


if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo   $row['staff_email']. '</br>'; 
    //     // 'welcome' . ;
    // }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Online Attendance register</title>
</head>
<body>
<div class="imm">
        <img src="./images/coke drink.jpg" alt="">

    </div>

<div class="class">
<h1 class="infomat">ONLINE ATTENDANCE RESULT</h1>

<table border=4>
    <tr>
        <th>STAFF EMAIL</th>
        <th>TIME IN</th>
        
    </tr>

    
        <?php 
        while ($row = mysqli_fetch_assoc($result)) :?>
    
        <tr>
    
        <td class="tab"><?=$row['staff_email']?></td>;
        <td class="tab"><?=$row['captured_time']?></td>;
 </tr>
        <?php endwhile?>
   
  
</table>

<div>

 <a href="register.php"><h5>Back to login</h5></a>
    
</body>
</html>













<!-- 

$sql = "SELECT * FROM table_name"; 
$result = mysqli_query($connection,$sql);  


if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["staff_id"]; 
    }
} -->