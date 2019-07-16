
<?php //include('include/home/header.php');
include "loginheader.php";
include "includes/db.php"; 
include "session.php";

?>
<head>  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script></head>
      <section>
    <div class="container">
      <div class="row">
        <?php// include('include/home/sidebar.php'); ?>

                    
    <div class="col-sm-9 padding-right">
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
          Available
        </div>
        <div class="card-body">
           <?php while($row = $result->fetch_assoc()) {
                                
                                      ?>
          <h5 class="card-title"><?php echo "class " . $row["class"]." " .$row["subject"]. "</br>"?> </h5>
          <p class="card-text"><?php echo "Need student from ". $row["need_std"]. "</br>"   ?>  </p>
          <a href="#" class="btn btn-primary">Details</a>
        </div>
        <div class="card-footer text-muted">
          <?php $o_time=strtotime($row["time"]);

           
           $u_time=floor(($t-$o_time)/(60*60*24));
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
</div>
</section>
<script type="text/javascript">
  $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});

</script>
<?php //include('include/home/footer.php'); ?>
