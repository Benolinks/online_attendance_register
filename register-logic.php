<?php
session_start();
require 'database.php';

if (isset($_POST ['submit'])){
   
   
    $staff_email = filter_var( $_POST['staff_email'],FILTER_SANITIZE_EMAIL);
    // $check = filter_var( $_POST['check'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
    $password = filter_var( $_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$staff_email || !$password ) {
        $_SESSION['register'] = "please enter a valid input";
        header('location:'.'register.php');     
}else {
    $sql = "SELECT * FROM `lateness` WHERE `staff_email`= '$staff_email' LIMIT 1 ";

    $result = mysqli_query($connection,$sql);  

    if ((mysqli_num_rows($result) == 1)) {
        $user_query = mysqli_fetch_assoc($result);

        if ($user_query['password'] ==$password) {
           
           $id= $user_query['id'];

          


            $new_sql = "INSERT INTO `register`(`staff_email`, `password`) 
            VALUES ('$staff_email','$password')";

            $new_result = mysqli_query($connection,$new_sql);
            
            if (!mysqli_error($connection)) {
                header('location:'.'index.php');
            }
            
        }else {
            header('location:'.'register.php');
        }
    }else {
        echo "user doesnt exist";
        header('location:'.'register.php');
    }
}










} else{
    header('location:'.'register.php');
}


?>