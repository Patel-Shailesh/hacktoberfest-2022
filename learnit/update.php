<?php
include_once 'dbConnection.php';
session_start();
$id=$_SESSION['id'];
	if(isset($_POST['button11'])) 
	{
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		$rrr = mysqli_query($con,"SELECT * FROM user where email='$email'");
		$count=mysqli_num_rows($rrr);
		if($count>=1)
		{
			header("location:index.php?err=1");
		}else
		{
				$name=$_POST['name'];
				$pass=$_POST['pass'];
				$role =$_POST['role'];
				
				$q=mysqli_query($con,"INSERT INTO `user`(`uid`, `name`, `email`, `pass`, `role`, `mob`) VALUES (NULL,'$name','$email','$pass','$role','$mob')")or die('Error009');
				header("location:index.php?s=1");
				
		}
	
		
	}
	if(isset($_POST['button12'])) 
	{
		$email=$_POST['email'];
		$name=$_POST['name'];
		$sub=$_POST['sub'];
		$feed =$_POST['feed'];
		$q=mysqli_query($con,"INSERT INTO `feedback`(`fid`, `mail`, `name`, `sub`, `text`) VALUES (NULL,'$email','$name','$sub','$feed')")or die('Error009');
		header("location:index.php?s=1");
		
	}
if(isset($_POST['subs'])) 
	{
		$c=$_POST['cid'];
		$q=mysqli_query($con,"INSERT INTO `subs`(`sid`, `uid`, `cid`, `sdate`,`progress`) VALUES (NULL,'$id','$c',NULL,0)")or die('Error009');
		header("location:dashboard.php?q=1");
		
	}



	if(isset($_POST['course']))
	{
		$gid=$_SESSION["id"];
		$topic = $_POST['topic'];
		$subject =$_POST['subject'];
		$desc=$_POST['desc'];
		$a=mysqli_query($con, "INSERT INTO `course`(`cid`, `topic`, `subject`, `description`, `leccnt`, `gid`, `subcount`) VALUES (NULL,'$topic','$subject','$desc',0,'$gid',0)");
		header("location:dashboard.php?q=1");
	}


?>