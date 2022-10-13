<?php
		include 'dbConnection.php';
		include 'include.php';
		$sid=$_GET['s'];
		$result1= mysqli_query($con,"SELECT * FROM subs where sid='$sid'");
		$row1=mysqli_fetch_array($result1);
		$cid=$row1['cid'];
		

	echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>'.$_GET['t'].'<b></span></h2><br><div class="card-group">';
				$result7 = mysqli_query($con,"SELECT * FROM lec where cid='$cid' ") or die('Error');
				
				$c=1;
				while($row = mysqli_fetch_array($result7))
				{
					$cid = $row['cid'];
					$lid = $row['lid'];
					$lname = $row['lname'];
					$llink = $row['llink'];
					echo  '<a href="video.php?l='.$lid.'&s='.$sid.'" class="card-link"><div class="card  shadow-lg mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$c++.'  '.$lname.'</h5>   						
  							</div>
							</div></a>';
					$c++;
					}

