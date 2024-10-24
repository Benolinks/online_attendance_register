<?php

require 'database.php';

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ONLINE REGISTER</title>
</head>

<body>

    <div class="imm">
        <img src="./images/coke drink.jpg" alt="">

    </div>


    <div class="all">
        <form action="signup-logic.php" method="post">

       
        
        <?php
        if (isset($_SESSION['signup'])) :?>
            <div class="message">

            <h2 class="red">
                <?=$_SESSION['signup'];
                unset($_SESSION['signup']);

                ?>
            </h2>
            </div>

            <?php endif ?>
            
            










            <h2 class="sign_up">SIGN UP FORM FOR NEW STAFF</h1>


            <div class="inf">
                <div class="info">
                    <input type="text" name="firstname" class="input" id=""  placeholder="First name"><br><br>
                    <input type="text" name="lastname" class="input" id=""  placeholder="last name"><br><br>
                    
                    <input type="text" name="staff_id" class="input" id="  "placeholder="Staff-id"><br><br>
                    <input type="text" name="staff_email" class="input" id=""  placeholder="Staff email"><br><br>
                    <input type="text" name="department" class="input" id=""  placeholder="Department"><br><br>
                    <input type="password" name="password" class="input" id="pass" placeholder="password"><br><br>
                   
                    <input type="checkbox"  class="checkbox" name="" id="checkbox">
                    
                    <input type="text" name="job_title" class="input" id=""  placeholder="job title"><br><br>
                    
                   
                    <button type="submit" name="submit" class="submit" >Submit</button>

                    <h2>already have an account <a href="register.php">Register</a> </h2>
        
    </div></form>
    <div>




    </div>
<script src="main.js"></script>
</body>

</html>