<?php

include('conn.php');

$name=$_POST['name'];
$pass=$_POST['pass'];

$sql = "INSERT INTO user (name, pass)
VALUES ('$name','$pass')";

mysqli_query($con, $sql);

header('location:view.php');