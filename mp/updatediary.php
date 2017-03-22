<?php
session_start();
include("connection.php");
$d=mysqli_real_escape_string($link,$_POST['diary']);
$i=$_SESSION['id'];

$query="UPDATE users SET diary='$d' WHERE id='$i' ";
mysqli_query($link,$query);


?>