<?php

// $username = $_GET["username1"];
$tenant= json_decode($_GET['tenant_array']);

print_r($tenant->email);

 
$building_name = $tenant->building_name;
$manager_email = $tenant->manager_email;
$manager_mobile_no = $tenant->manager_mobile_no;
 
$username = $tenant->username;
$email = $tenant->email;
$mobile = $tenant->mobile;
session_start();

$_SESSION['building_name'] = $building_name;
$_SESSION['manager_email'] = $manager_email;
$_SESSION['manager_mobile_no'] = $manager_mobile_no;
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['mobile'] = $mobile;
?>