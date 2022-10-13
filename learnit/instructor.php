<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <div class="container-fluid">
	    <a class="navbar-brand" href="#">Instructor Dashboard</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	      <ul class="navbar-nav ">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="add.php">Add a Course</a>
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

		if(@$_GET['q']==1)
		{
				echo '<div class="container-md"><br></div><div class="container-md bg-info bg-opacity-25"><br><h2 class="shadow-lg p-3 mb-5 rounded bg-primary"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 30px !important;letter-spacing: 4px;"><b>Courses<b></span></h2><br><div class="card-group">';
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
				    
					$result3 = mysqli_query($con,"SELECT * FROM user where uid='$id'") or die('Error');
					$r=mysqli_fetch_array($result3);
					echo  '<a href="courseedit.php?c='.$cid.'" class="card-link"><div class="card  shadow-lg mb-5 bg-body rounded" style="width: 18rem;">
  							<div class="card-body">
   							<h5 class="card-title">'.$topic.'</h5>
   							<h6 class="card-subtitle mb-2 text-muted">'.$subject.'</h6>
    						
  							</div>
							</div></a>';
					$c++;
					}


				
				echo '</div><br></div>';
		}else if(@$_GET['q']==2)
		{
				?><div class="modal fade "   id="signup">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h4 class="modal-title" ><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px;"><b>SIGN UP</b></span></h4>
	     	</div>
			<div class="modal-body title1" >
				<div class="col-md-9">
					<form role="form" name="form" onSubmit="return validateForm()" action="update.php" method="post">
						<div class="form-group">
							<input type="text" name="name" placeholder="Full Name"  class="form-control"/> 
						</div>
						
						<div class="form-group">
							<input type="email" name="email" placeholder="Email ID"  class="form-control"/>
						</div>
						
						<div class="form-group">
							<input type="number" name="mob"  placeholder="Mobile Number"  class="form-control" />
						</div>
						
						<div class="form-group">
							<input type="password" name="pass" placeholder="Enter Suitable Password" class="form-control" >
						</div>
						
						<div class="form-group">
							<input type="password" name="pass2" placeholder="Confirm Password" class="form-control" >
						</div>
						<span>Role : </span>
						<div class="form-check-inline" >
							<input type="radio" name="role" value="Teacher" id="tchrradio" class="form-check-input" >
							<label class="form-check-label" for="tchrradio">Teacher</label>
						</div>
						<div class="form-check-inline">
							<input type="radio" name="role" value="Student" id="stdradio" class="form-check-input" >
							<label class="form-check-label" for="stdradio">Student</label>
						</div>
						<br>
						<div class="form-group" align="center">
							<input type="submit" name="button11" value="Submit" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
		<?php } ?>


			