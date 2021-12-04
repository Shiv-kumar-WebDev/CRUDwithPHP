<?php

include('conn.php');

$id=$_GET['id'];

$sql = "DELETE FROM user WHERE id=$id";

mysqli_query($con, $sql);

header('location:view.php');