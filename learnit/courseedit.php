<?php 
        $c=@$_GET['c'];

        




echo'
<form method="post" action="upload.php" enctype="multipart/form-data">
    <p>Add Video :</p>
    <input type="hidden" name="c" value="'.$c.'">
    <input type="text" name="lecname" placeholder="Lecture Name" required> 
    <input type="file" name="Filename" placeholder="Select your File">
    <input TYPE="submit" name="upload" value="Submit"/>
</form>';



?>