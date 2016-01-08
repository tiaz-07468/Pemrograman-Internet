<?php
include "../lib/function.php";

$username=$_POST['user'];
$password=$_POST['pass'];
$query = new fungsiku();

$query->authLog($username,$password);

?>