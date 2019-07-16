<?php

session_start();
 if(!isset($_SESSION)) 
		    { 
		        session_start(); 
		    } 	
 include 'includes/db.php';
	//if($_SERVER["REQUEST_METHOD"] == "POST") 
	if(isset($_POST['login_btn']))
	 {

		
		
		//$email= $_POST['email'];		
		$email=mysqli_real_escape_string($connection, $_POST['email']);

		//$username=mysqli_real_escape_string($connection, $_POST['username']);
		$password=mysqli_real_escape_string($connection, $_POST['password']);
		//$password=md5($password); //testing without md5
		
		// $Id = $_POST['Id'];   
        //$password = md5($_POST['password']);   
        
        $q = "SELECT * from users where email='$email' and password='$password'";
        //echo $q;
        $result = mysqli_query($connection,$q);
       // $row = mysqli_fetch_array($result);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	//$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("username");
         //$_SESSION['login_user'] = $username;
      	 //session_register("username");
         $_SESSION['login_user'] = $row['username'];
         $_SESSION['login_id'] = $row['id'];

    		//$_SESSION['username']=$username;
         echo "nice";
         header("location: profile.php");
      }else {
      	echo "wrong";
         $error = "Your Login Name or Password is invalid";
      }
   }

/*
        if(mysqli_num_rows($result)>0){
        echo "login successfully";

        $_SESSION['userlogin']=$row['username'];
        $_SESSION['user1_id']=$row['id'];
        unset($_SESSION['login']);
        header("location:index.php");
        }
        else {
            $_SESSION['loginfail']="Incorrect Username/Password";
            echo "Failed to login";
            //header("location:../loginfailed.php");
        }

			//redirect to home page 

		}
*/?>

<?php include('includes/header.php'); ?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->

 
	<div class="error"></div>	


						<h2>Login</h2>
						  <form action="login.php" method="POST">
	                        <div class="form-group">
				                <label>Email</label>
				                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				            </div>

                            <div class="form-group">
			                <label>Password</label>
			                	<input type="password" name="password" class="form-control" placeholder="password" required>
			            	</div>

                            <div class="form-group">
						        <button type="submit" name="login_btn" class="btn btn-success">Log in</button>
						        <a href="register.php"  class="btn btn-success  ">Registration</a>
				                <a href="forget_password/forget.php"  class="btn btn-success  ">Forget Password</a>
						    </div>
                        </form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
   
    
<?php// include('include/home/footer.php'); ?>
