<?php
include "pwd_validation.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <div class="main">
        <img class="img" src="../../photos/background.png">
        <div class="formular">
            <form action="login.php" method="post">
                <h1>Login into our shop</h1>
                <div class="password">
                    <input type="password" name="password" placeholder="Password" required id="password">
                    <i class="far fa-eye" id="togglePassword" onclick="showHidePassword()"></i>
                </div>
                <button name="submit" type="submit">Continue</button>
            </form>
            <a href="../../index.php" style="text-decoration:none" ;>
                <p class='warning'
                    style='color:black; text-align:center; font-size: 1rem; background-color: orange; border-radius: 60px; width: 150px; margin-left: -25%;margin-bottom: 10%;  '>
                    Back </p>
            </a>

            <?php
            /* Checking if password is correct from password from database, if yes open boss.php */
            if (isset($_POST["submit"])) {
                $userInput = $_POST['password'];
                if ($userInput == $password[0]) {
                    header("location: boss.php");
                } else {
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 5px 0 5px 0; width: 250px; margin-left: 15%; '> Wrong password ! </p>";
                }
            }
            ?>
        </div>
    </div>

    <script src="../js/login.js?<?php echo time(); ?>"></script>
</body>

</html>