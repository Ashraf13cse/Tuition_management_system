<?php
session_start();	
 include 'includes/db.php';
 include 'session.php';
	if(isset($_POST['resume_btn'])){
		 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
		$user_id=$login_session_id;
		//$username=mysqli_real_escape_string($connection, $_POST['username']);
		$varsityname=mysqli_real_escape_string($connection, $_POST['varsityname']);
		$department=mysqli_real_escape_string($connection, $_POST['department']);
		$year=mysqli_real_escape_string($connection, $_POST['year']);
		$address=mysqli_real_escape_string($connection, $_POST['address']);
		$mobile=mysqli_real_escape_string($connection, $_POST['mobile']);
		
			$sql="INSERT INTO resumes(user_id,name,varsityname,department,year,address,mobile) VALUES('".$user_id."','".$login_session."','".$varsityname."','".$department."','".$year."','".$address."','".$mobile."')"; 
			$result=mysqli_query($connection, $sql);
					header("location:view_resume.php");
				

	}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Resume Editing</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 <?php include "loginheader.php" ?>
<div class="container" >
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
        <h4 class="modal-title" id="myModalLabel"> Registration </h4>
      
        <form action="resume.php" method="POST">
           
           
            <div class="form-group">
            <label for="exampleFormControlSelect1">Select Your Varsity</label>
                <select  name="varsityname" class="form-control" d="varsity" placeholder="Choose any of them">
                    <option>cuet</option>
                    <option>cu</option>
                    <option>cmc</option>
                    <option>cvasu</option>
                    <option>national varsity</option>
                    <option>private varsity</option>
                    <option>Madrasa level</option>
                    <option>College level</option>
                    <option>School level</option>
                

                </select>
            </div>
            
            <div class="form-group">
                <label>Department</label>
                <input type="text" name="department" class="form-control" placeholder="Example:CSE" required>
            </div>
	

			<div class="form-group">
                <label>Year</label>
                <input type="text" name="year" class="form-control" placeholder="Example:first" required>
            
            <div class="form-group">
                <label>Present Address</label>
                <input type="text" name="address" class="form-control" placeholder="Example:Pahartoli" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input  name="mobile" class="form-control" placeholder="Example:01521_____" required>
            </div>
        <div class="form-group">
        <button type="submit" name="resume_btn" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
