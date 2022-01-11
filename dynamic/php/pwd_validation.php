<!-- Getting password from database -->
<?php
include "connect.php";

$db = mysqli_select_db($conn, "gymm_shop");
$query = mysqli_query($conn, "SELECT * FROM password");

$password = [];

while ($row = mysqli_fetch_array($query)) {
    $password[] = $row['password'];
}