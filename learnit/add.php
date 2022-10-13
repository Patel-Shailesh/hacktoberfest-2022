
<style type="text/css">
	table, th, td {
  text-align: center;
}
</style>


<?php
		include_once 'dbConnection.php';
		include_once 'include.php';
?>
	

		<div class="col-md-9">
					<form role="form" method="post"   action="update.php">
						<div class="form-group">
							<input type="text" name="topic" placeholder="Topic" required="required" class="form-control"/> 
						</div>
						
						<div class="form-group">
							<input type="text" name="subject" placeholder="Subject" required="required" class="form-control"/>
						</div>
						
						<div class="form-group">
							<textarea class="form-control" name="desc" placeholder="Description" required></textarea>
						</div>
						
						<div class="form-group" align="center">
							<input type="submit" name="course" value="Submit" class="btn btn-primary" />
						</div>
					</form>
		</div>

