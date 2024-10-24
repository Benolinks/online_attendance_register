

<?php
$date = new DateTime();
   
$one = json_encode($date, true);

$two = json_decode($one,true);

 $three = $two['date'];

$four = $three;

// print_r($four)

session_start();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ONLINE CHECK IN </title>
</head>

<body>

    <div class="imm">
        <img src="./images/coke drink.jpg" alt="">

    </div>


    <div class="all">
        <form action="register-logic.php" method="post">
            <h2 class="sign_up">ONLINE DAILY ATTENDANCE</h1>


            <div class="inf">
                <div class="info">
                <?php  if (isset($_SESSION['register'])) :?>
        <div class="message">

            <h2 class="red">Please enter a valid input</h2>
        </div>
        <?php unset($_SESSION['register'])?>
        <?php endif ?>

        <br><br><br>

                  
                   

                <div class="inputs" name="check"><?=$four?> <p>check-in time</p></div>
                    <input type="text" name="staff_email" class="input" id="" placeholder="Staff-email"><br><br>
                   
                    <input type="password" name="password" class="input" id="pass" placeholder="password"><br><br>
                   
                    <input type="checkbox"  class="checkbox" name="" id="checkbox">
                    <!-- <input type="text" name="" class="input" id="" placeholder="job title"><br><br> -->
                    <button type="submit" name="submit" class="submit" >Check In</button>

                    <h2>dont have an account <a href="signup.php">sign up</a> </h2>
        </form>
    </div>
    <div>








    </div>

    <script src="main.js"></script>

</body>

</html>