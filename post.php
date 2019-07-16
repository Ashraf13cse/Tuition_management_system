<?php
session_start();	
 include 'includes/db.php';
 include 'includes/header.php';
 include 'session.php';
	if(isset($_POST['post_btn'])){
		 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
		//$user_id=$login_session_id;
		$name=mysqli_real_escape_string($connection, $_POST['name']);
        $class=mysqli_real_escape_string($connection, $_POST['class']);
        $subject=mysqli_real_escape_string($connection, $_POST['subject']);
		
        $salary=mysqli_real_escape_string($connection, $_POST['salary']);
        //$gender=mysqli_real_escape_string($connection, $_POST['gender']);
		
        $address=mysqli_real_escape_string($connection, $_POST['address']);
		$mobile=mysqli_real_escape_string($connection, $_POST['mobile']);
        $need_std=mysqli_real_escape_string($connection, $_POST['need_std']);
        $extra=mysqli_real_escape_string($connection, $_POST['extra']);
        	$random=mt_rand(10000,999999);	
			
            $sql="INSERT INTO tutions(name,class,need_std,subject,address,mobile,salary,extra,random) VALUES('".$name."','".$class."','".$need_std."','".$subject."','".$address."','".$mobile."','".$salary."','".$extra."','".$random."')"; 
            //$random=mt_rand(10000,999999);

			$result=mysqli_query($connection, $sql);
					echo "Your post is approved.Please remember this code '$random' to edit/delete or further doing any process.Thanks";
                    
                  //  $sql="INSERT INTO tutions(random) Values ('')"
               //     header("location:index.php");
				

	}
 
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Post</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 <?php// include "loginheader.php" ?>
<div class="container" >
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
        <h4 class="modal-title" id="myModalLabel"> Post for Searching Teacher </h4>
      
        <form action="post.php" method="POST">
           
           
             <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" id="name" >
            </div>
             <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" class="form-control" placeholder="Example:6" required>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Physics,Chemistry" required>
            </div>

			<div class="form-group">
                <label>Address</label>
                <input  name="address" class="form-control" placeholder="Example:Pahartoli" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input  name="mobile" class="form-control" placeholder="Example:01521_____" required>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input  name="salary" class="form-control" placeholder="Example:5000" >
            </div>
           
            <div class="form-group">
            <label for="exampleFormControlSelect1">Need_std</label>
                <select  name="need_std" class="form-control" d="varsity" placeholder="Choose any of them">
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
                <label>Extra information(if necessary)</label>
                <input type="text" name="extra" class="form-control"  >
            </div>
            
        <div class="form-group">
        <button type="submit" name="post_btn" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
</div>

   
</div>
<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
