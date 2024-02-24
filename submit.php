<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'praise_party_user', 'lbwulhckxznqu3ir59wf', 'praise_party');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$province = $_POST['province'];
$member = $_POST['member'];
$parish = $_POST['parish'];
$code = mt_rand(10000, 99999);


// database insert SQL code
$sql = "INSERT INTO `praise_party_registrations` (`name`, `email`, `phone`, `gender`, `province`, `member`, `parish`, `code`, `created_at`) 
VALUES ('$name', '$email', '$phone', '$gender', '$province', '$member', '$parish', '$code',now())";

// insert in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}

