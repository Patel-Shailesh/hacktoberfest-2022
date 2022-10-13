 <nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <div class="container-fluid">
	    <a class="navbar-brand" href="#">Learner Dashboard</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	      <ul class="navbar-nav ">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="dashboard.php?q=1">My Courses</a>
	        </li> <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="dashboard.php?q=2">Join a Course</a>
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

		 		$id=$_SESSION["id"];

		if(@$_GET['q']==2)
		{
			echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>Available Courses<b></span></h2><br><div class="card=group">';
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
					$rr=mysqli_query($con,"SELECT * FROM subs where uid='$id' and cid='$cid'");
					$cn=mysqli_num_rows($rr);

					if($cn==0){
						$row=mysqli_fetch_array($rr);
					echo  '<a  class="card-link " href="#subs" data-bs-toggle="modal" data-bs-target="#subs"><div class="card  shadow-lg  mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$topic.'</h5>
   							<h6 class="card-subtitle mb-2 text-muted">'.$subject.'</h6>
    						<p class="card-subtitle mb-2 text-muted">'.$r['fname'].' '.$r['lname'].'</p>
  							</div>
							</div></a>
<div class="modal fade"   id="subs">
  	<div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h4 class="modal-title" ><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px;"><b>Join '.$topic.'?</b></span></h4>
	     	</div>
			<div class="modal-body title1" >
				<div class="col-md-9">
					<form role="form" method="post" action="update.php">
					<div class="form-group" align="center">
							<input type="hidden" name="cid" value="'.$cid.'"  />

						</div>
						<div class="form-group" align="center">
							<input type="submit" name="subs" value="Join" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
';
$c++;
					}



				}echo '</div><br></div>';
		}else if(@$_GET['q']==1)
		{

			echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>MY LEARNING<b></span></h2><br><div class="card-group">';
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
					$rr=mysqli_query($con,"SELECT * FROM subs where uid='$id' and cid='$cid'");
					$cn=mysqli_num_rows($rr);

					if($cn>0){
						$row=mysqli_fetch_array($rr);
						$sid=$row['sid'];
					echo  '<a href="course.php?q=3&s='.$sid.'&t='.$topic.'" class="card-link"><div class="card  shadow-lg  mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$topic.'</h5>
   							<h6 class="card-subtitle mb-2 text-muted">'.$subject.'</h6>
    						<p class="card-subtitle mb-2 text-muted">'.$r['fname'].' '.$r['lname'].'</p>
  							</div>
							</div></a>';
					$c++;
					}

}
				
				echo '</div><br></div>';


		}else if(@$_GET['q']==3)
		{

		$sid=$_GET['s'];
		$result1= mysqli_query($con,"SELECT * FROM subs where sid='$sid'");
		$row1=mysqli_fetch_array($result1);
		$cid=$row1['cid'];
		

	echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>Courses<b></span></h2><br><div class="card-group">';
				$result7 = mysqli_query($con,"SELECT * FROM lecture where cid='$cid' ") or die('Error');
				
				$c=1;
				while($row = mysqli_fetch_array($result7))
				{
					$cid = $row['cid'];
					$topic = $row['topic'];
					$subject = $row['subject'];
					$lecnt = $row['leccnt'];
				 	$gid = $row['gid'];
				    $subc = $row['subcount'];
				    
					$result3 = mysqli_query($con,"SELECT * FROM user where uid='$id'") or die('Error');
					$r=mysqli_fetch_array($result3);
					echo  '<a href="course.php?s='.$cid.'" class="card-link"><div class="card  shadow-lg mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$topic.'</h5>
   							<h6 class="card-subtitle mb-2 text-muted">'.$subject.'</h6>
    						
  							</div>
							</div></a>';
					$c++;
					}

		}


			


	




?>
