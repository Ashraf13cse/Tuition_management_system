<?php
session_start();	
 include 'includes/db.php';
	if(isset($_POST['register_btn'])){
		 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
		$username=mysqli_real_escape_string($connection, $_POST['username']);
		$email=mysqli_real_escape_string($connection, $_POST['email']);
		$password=mysqli_real_escape_string($connection, $_POST['password']);
		$password2=mysqli_real_escape_string($connection, $_POST['password2']);
		if($password==$password2){
			//$password=md5($password); //testing without md5
			$s= "select * from users where email='$email'";
			$result=mysqli_query($connection, $s);
			
    //echo "New record created successfully";
				
				$num=mysqli_num_rows($result);
				if($num==1){
					$_SESSION['messege']=" mail already taken";
					Echo "This mail already taken";
					header("location:register.php");
				} 
				else{
			$sql="INSERT INTO users(username,email,password) VALUES('".$username."','".$email."','".$password."')"; 
			$result=mysqli_query($connection, $sql);
					header("location:index.php");

		}
	
	/*		else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}*/
			$_SESSION['messege']=" Logged in"; 
			$_SESSION['username']=$username;
			
			//header("location:index.php");//redirect to home page 

		}
		else
		{
			$_SESSION['messege']="password do not match"; 
		}

	}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> register</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 <?php include "includes/header.php" ?>
<div class="container" >
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
        <h4 class="modal-title" id="myModalLabel"> Registration </h4>
      
        <form action="register.php" method="POST">
           
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="username" class="form-control" placeholder="name" required>
            </div>
             <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
        	
             <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" minlength="7" required>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input type="password" name="password2" class="form-control" placeholder="confirm password" required>
            </div>
        <div class="form-group">
        <button type="submit" name="register_btn" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
