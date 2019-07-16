
<?php //include('include/home/header.php');
include "loginheader.php";
include "includes/db.php"; 
include "session.php";
$sql= "Select t.t_id,t.name,t.class,t.subject,t.address,t.mobile,t.salary,t.extra from tutions as t,resumes as r,users as u where (t.need_std=r.varsityname) and (r.user_id=u.id)";  
$result=mysqli_query($connection, $sql);
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
    <?php print_r($sql)?>
    </tr>
  </thead>
    <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
  <tbody>
    <tr>
    
      <th scope="row"><?php echo $row["t_id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["class"]; ?></td>
      <td><?php echo $row["subject"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
      <td><?php echo $row["salary"]; ?></td>
      <td><?php echo $row["extra"]; ?></td>
      <td><?php echo $row["address"]; }}?></td>
    
    </tr>
  </tbody>
</table>
    </div>
  </div>
</section>

<?php //include('include/home/footer.php'); ?>
