<?php
   include 'includes/db.php';
    if(!isset($_SESSION)) 
          { 
              session_start(); 
          } 
  
 
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connection,"select username,id from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_session_id = $row['id'];

   
      if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
}
?>