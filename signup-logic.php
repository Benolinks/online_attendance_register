

<?php

session_start();

require 'database.php';



// VALIDATE USER INPUTS 



if (isset($_POST['submit'])) {
$firstname = filter_var( $_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lastname = filter_var( $_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_var( $_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$staff_id = filter_var( $_POST['staff_id'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$staff_email = filter_var( $_POST['staff_email'],FILTER_SANITIZE_EMAIL);
$department = filter_var( $_POST['department'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$job_title = filter_var( $_POST['job_title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (!$firstname ||!$lastname || !$staff_id ||!$department ||!$job_title || !$password ) {
        $_SESSION['signup'] = "please enter a valid input";
        header('location:'.'signup.php');

} else {

    $check_sql = "SELECT * FROM `lateness` WHERE `staff_email`= '$staff_email' LIMIT 1 ";

    $check_result = mysqli_query($connection,$check_sql);  

    if ((mysqli_num_rows($check_result) == 1)) {
        $_SESSION['signup']= 'User account already exist';
        header('location:'.'signup.php');
    }else {
    
    $sql = "INSERT INTO `lateness`(`firstname`, `lastname`, `password`, `staff_id`, `staff_email`, `department`, `job_title`)
     VALUES ('$firstname','$lastname','$password','$staff_id','$staff_email','$department','$job_title')";
   
   $result = mysqli_query($connection,$sql); 
   if (!mysqli_error($connection)) {
        header('location:'.'register.php');
     }
}
}



} else {
    header('location:' . 'signup.php');
}


// if (isset($_POST ['submit'])){
    
// $firstname = filter_var( $_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $lastname = filter_var( $_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $password = filter_var( $_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $staff_id = filter_var( $_POST['staff_id'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $staff_email = filter_var( $_POST['staff_email'],FILTER_SANITIZE_EMAIL);
// $department = filter_var( $_POST['department'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $job_title = filter_var( $_POST['job_title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// if (!$firstname ||!$lastname || !$staff_id ||!$department ||!$job_title || !$password ) {
//     $_SESSION['signup'] = "please enter a valid input";
//     header('location:'.'signup.php');


// }else {
    
//     $sql = "INSERT INTO `lateness`( `firstname`, `lastname`, `password`, `staff_id`, `staff_email`, `Department`, `job_title`, `signed_time`, `recieved_time`)
//      VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')";


// $result = mysqli_query($connection,$sql);  


// if (!mysqli_error($connection)) {
//     header('location:'.'register.php');
// }


// else{
//     header('location:'.'signup.php');
// }




?>



