<?php

include('conn.php');

$name=$_POST['name'];
$pass=$_POST['pass'];
$id=$_GET['id'];

$sql = "UPDATE user SET name='$name', pass='$pass'
WHERE id=$id";

mysqli_query($con, $sql);

header('location:view.php');