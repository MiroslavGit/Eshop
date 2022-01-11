<?php

if (isset($_POST["submit"])) {

    $nickName = $_POST["nickname"];
    $password = $_POST["password"];

    require_once "../connect.php";
    require_once "functions.php";

    loginUser($conn, $nickName, $password);
} else {
    /* header("location: ../../eshop/dynamic/php/index.php"); */ // toto je vypis v url prehliadaci
    exit();
}