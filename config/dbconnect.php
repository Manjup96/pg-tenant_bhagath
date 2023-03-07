<?php

// $server = "localhost";
// $user = "root";
// $password = "";
// $db = "admin";


$server="localhost";
$user="u406176785_pg_mng_user";
$password="Pt;VYa&ez2:";
$db="u406176785_pg_management";
		

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>