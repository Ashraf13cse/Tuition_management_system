<?php   

session_start();  
 include 'db.php';
 include 'includes/header.php';
 include 'session.php';
 
     if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   if(isset($_POST['delete_btn'])){
        $random=mysqli_real_escape_string($connection, $_POST['random']);
        $sql="SELECT * from tutions where random=$random";
        $result=mysqli_query($connection, $sql);
         
    
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
         $_SESSION['code'] = $row['random'];
      
        header("location: delete_post.php");
    }
}
?>
<div class="container">
 <div class="row">
        <form action="delete_1.php" method="POST">
                            <div class="form-group">
                                <label> YOUR Code</label>
                                <input  name="random" class="form-control" placeholder="Enter your code" >
                            </div>
                            <button type="submit" name="delete_btn" class="btn btn-success">Submit</button>
        </form>
    </div>
  </div>