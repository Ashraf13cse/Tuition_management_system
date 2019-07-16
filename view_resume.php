<?php
include 'loginheader.php';
include 'db.php';
include 'session.php';
$sql="select * from resumes where user_id='$login_session_id'";
$result=mysqli_query($connection, $sql);

?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Varsity</th>
      <th scope="col">Department</th>
      <th scope="col">Year</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["varsityname"]; ?></td>
      <td><?php echo $row["department"]; ?></td>
      <td><?php echo $row["year"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
      <td><?php echo $row["address"]; }}?></td>
    
    </tr>
  </tbody>
</table>