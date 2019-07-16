
<?php //include('include/home/header.php');
include "includes/header.php";
include "includes/db.php"; 
include "session.php";


$sql= "SELECT * from tutions where (random=".$_SESSION['code'].")";  
$result=mysqli_query($connection, $sql);
if(isset($_POST['delete'])){
$q="DELETE FROM `tutions` WHERE random=".$_SESSION['code']."";
$result=mysqli_query($connection, $q);
header('location:home.php');
}


?>

<section>
  <div class="container">
    <div class="row">                  
      <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
              <h2 class="title text-center">All Tutions</h2>
      <!--php starts here-->
      <?php
      $t=strtotime("now");
      //time start from now 
      ?> 

            </div>

      </div>
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Mobile</th>
      <th scope="col">Salary</th>
      
      <th scope="col">Remember</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    <?php print_r($sql)?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
      <th scope="row"><?php echo $row["t_id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["class"]; ?></td>
      <td><?php echo $row["subject"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
      <td><?php echo $row["salary"]; ?></td>
      <td><?php echo $row["extra"]; ?></td>
      <td><?php echo $row["address"]; }}?></td>
      <td><form action="delete_post.php" method="POST">
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</section>

<?php //include('include/home/footer.php'); ?>
