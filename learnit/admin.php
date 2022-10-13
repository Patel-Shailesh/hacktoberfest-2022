<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <div class="container-fluid">
	    <a class="navbar-brand" href="#">ADMIN Dashboard</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	      <ul class="navbar-nav ">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="dashboard.php?q=1">Users</a>
	        </li><li class="nav-item">
	          <a class="nav-link" aria-current="page" href="dashboard.php?q=2">Courses</a>
	        </li><li class="nav-item">
	          <a class="nav-link" aria-current="page" href="dashboard.php?q=3">Feedback</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="profile.php" >Profile</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="logout.php" >Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
</nav>
<?php
		

		if(@$_GET['q']==1)
		{

			$result = mysqli_query($con,"SELECT * FROM user where not uid = '$id'") or die('Error');
			echo  '<div class="panel"><table class="table table-striped title1">
			<tr><th><b>S.N.</b></th><th><b>Name</b></th><th><b>Email</b></th><th><b>Role</b></th><th><b>Mobile</b></th><th><b>Verified?</b></th></tr>';
			$c=1;
			while($row = mysqli_fetch_array($result)) {
				$uid = $row['uid'];
				$uname = $row['fname'].' '.$row['lname'];
				$email = $row['mail'];
				$urole = $row['role'];
			 	$mob = $row['mob'];
			    $ver = $row['verified'];
			
			
			echo '<tr style="color:#99cc32"><th>'.$c++.'</th><td>'.$uname.'&nbsp;</td><td>'.$email.'</td><td>'.$urole.'</td><td>'.$mob.'</td><td>'.$ver;
			if($ver == "No")echo '<form method="post" action="update.php?u=dashboard.php?q=1"><button type="submit" name="button1"  value="'.$uid.'">Verify</button></form></td> ';
			
			// if(isset($_POST['button1'])) { 
			// 	$x = $_POST['button1'];
			// 	$q=mysqli_query($con,"UPDATE `user` SET `verified` = 'Yes' WHERE `user`.`uid` = $x ")or die('Error124');
				
   //      	} 
			}
			
			$c=0;
			echo '</table></div>';

		}else if(@$_GET['q']==2)
		{
			echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>Courses<b></span></h2><br>';
				$result7 = mysqli_query($con,"SELECT * FROM course") or die('Error');
				
				$c=1;
				while($row = mysqli_fetch_array($result7))
				{
					$cid = $row['cid'];
					$topic = $row['topic'];
					$subject = $row['subject'];
					$lecnt = $row['leccnt'];
				 	$gid = $row['gid'];
				    $subc = $row['subcount'];
				    
					$result3 = mysqli_query($con,"SELECT * FROM user where uid='$gid'") or die('Error');
					$r=mysqli_fetch_array($result3);

					echo  '<div class="card  shadow-lg  mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$topic.'</h5>
   							<h6 class="card-subtitle mb-2 text-muted">'.$subject.'</h6>
    						<p class="card-subtitle mb-2 text-muted">'.$r['fname'].' '.$r['lname'].'</p>
  							</div>
							</div>';
					$c++;
					


				}
				echo '<br></div>';
			}else if(@$_GET['q']==3)
		{
			$result = mysqli_query($con,"SELECT * FROM feedback order by fid desc") or die('Error');
			echo  '<div class="panel"><table width="100%" class="table table-striped title1">';
			$c=1;
			while($row = mysqli_fetch_array($result)) {
				$uname = $row['name'];
				$email = $row['mail'];
				$sub = $row['sub'];
			 	$text = $row['text'];
			    $time = $row['time'];
			
			
			echo '<tr><th>'.$c++.'.</th><td>'.$uname.'</td><td>'.$email.'</td><td>'.$time.'</td></tr><tr><td></td><td><strong>Subject :</strong></td><td colspan="2">'.$sub.'</td><tr><td></td><td><strong>Text :</strong></td><td colspan="2">'.$text.'</td></tr><tr><td colspan="4">&nbsp;</td></tr>';
			}
			$c=0;
			echo '</table></div>';
		}
	?>