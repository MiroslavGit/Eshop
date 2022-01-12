<?php
$serverName = "sql109.epizy.com";
$username = 'epiz_30795548';
$password = 'DpsUP3ChOnAjG';
$dbname = "epiz_30795548_gymm_shop";


/* Create conection */
$conn = mysqli_connect($serverName, $username, $password, $dbname);

/* Check conection */
if (!$conn) {
    die('Could not Connect My Sql:');
}