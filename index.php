<?php //include('include/home/header.php');
include "includes/header.php"; 
include "includes/db.php"; 
include "session.php";

?>

<section>
  <div class="container">
    <div class="row">
    <?php// include('include/home/sidebar.php'); ?>


      <div class="col-sm-12 padding-right">
        <div class="features_items"><!--features_items-->
        <h2 class="title text-center">All Tutions</h2>


        <!--php starts here-->

        <?php
        $t=strtotime("now");
        //time start from now 
        ?>
        
          <div class="row">
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-header">
                <?php $sql="SELECT * FROM tutions";
                $result = $connection->query($sql);
                if ($result->num_rows >0) {
                  if($result->num_rows<=20){
                  // output data of each row
                  ?>
                   <?php while($row = $result->fetch_assoc()) {

                  ?>
                </div>
                 <?php echo "Tution No:" .$row["t_id"]."</br>"?>
                <div class="card-body">
                 
                  <h5 class="card-title"><?php echo "class " . $row["class"]." " .$row["subject"]. "</br>"?> </h5>
                  <p class="card-text"><?php echo "Need student from ". $row["need_std"]. "</br>"   ?>  </p>
                  <a href="#" class="btn btn-primary">Details</a>
                </div>
                <div class="card-footer text-muted">
                  <?php $o_time=strtotime($row["time"]);


                  $u_time=floor(($t-$o_time)/(60*60*24));
                  $u_time=$u_time+1;
                  echo "Posted ".($u_time)." days before";}}} ?>
                </div>
              </div>
            </div>
          </div>  


        <!--php ends here-->
        </div>
      </div>
    </div>
  </div>
  
</section>

<?php //include('include/home/footer.php'); ?>