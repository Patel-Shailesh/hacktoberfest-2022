<?php   
include_once 'dbConnection.php';
include_once 'include.php';

session_start();
$id=$_SESSION['id'];
$result = mysqli_query($con,"SELECT * FROM user where uid='$id'") or die('Error');
$row= mysqli_fetch_array($result);
$uid=$row['uid'];
$fname=$row['fname'];
$lname=$row['lname'];
$mail=$row['mail'];
$pass=$row['pass'];
$role=$row['role'];
$mob=$row['mob'];






?>