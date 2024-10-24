<?php

require 'connect.php';

$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (mysqli_error($connection)) {
    echo "there was a problem";
    die(mysqli_error($connection));

}



















// $date = new DateTime();
   
// $one = json_encode($date, true);

// $two = json_decode($one,true);

// echo $three = $two['date'];






?>