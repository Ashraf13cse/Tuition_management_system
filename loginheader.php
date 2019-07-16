<?php
include 'session.php';	
?>

<?php 
include 'db.php';
//include '/session.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CtgTution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
		<div class="dropdown">
			<a class="btn btn-secondary dropdown-toggle" href="profile.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php echo $login_session; ?>
			</a>

			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="resume.php">Create resume </a>
				<a class="dropdown-item" href="view_resume.php">View resume </a>
				<a class="dropdown-item" href="edit_resume.php">Edit resume</a>
				<a class="dropdown-item" href="logout.php">Log out</a>
				
			</div>
		</div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Available Tutions<?php //if($username!=0) echo $username ?></a>
      </li>
      
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="post.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Teacher
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="post.php">Post for teacher </a>
            <a class="dropdown-item" href="delete_1.php">Delete post</a>  
          </div>
        </div>
    </ul>
    
    <div class="search-box">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" autocomplete="on" placeholder="Search" aria-label="Search">
        
        <div class="result"></div>
      </form>
    </div>
  
  </div>
</nav>

 

<div class="card">
  <img src="tution.jpg" class="card-img-top" alt="..." width="100%" height="200px">
</div>
  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
