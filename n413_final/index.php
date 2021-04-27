<style>
#banner {
  background-image: url('lava.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 850;
  opacity: 0.85;
}

</style>

        <?php
    include("n413finalConnect.php");
    include("head.php");
    //pull from sql, change this later to 24 hour time limit
    $sql = "SELECT * FROM `list`
            ORDER BY RAND() LIMIT 1";
            //$image = date('Y-m-d', mktime(0, 0, 0, 1, 0, 2021)).".jpg";
            
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    //below are the reviews
     $reviews = array();
	 $reviewSql = "SELECT r.id, u.username, l.item, r.rating FROM reviews r, list l, users_hash u WHERE r.item = l.id AND r.user = u.id AND r.approve = 1";
     $reviewResult = mysqli_query($link, $reviewSql);
     while ($reviewsRow = mysqli_fetch_array($reviewResult, MYSQLI_BOTH)){
        $reviews[] = $reviewsRow;
     }
        ?>
    <div id="banner">
            <div class="col-12 text-center w-75 mx-auto">
                <h1 style="color:white;font-size:65px; font-family:'recursive';">THAT SAUCE MIGHT BE CLOSER THAN YOU THINK</h1>
            </div> <!-- /col-12 -->
        <div id="subtitle" class="row">
            <div class="col-12 text-center">
                <h3 style="color:white;font-size:25px;">Just dont get lost in the sauce</h3>
            </div> <!-- /col-12 -->
        </div> <!-- /row -->

		<div class="container-fluid">
    <div id="headline" class="row mt-2">
        <div class="col-3 text-center">
        <?php
            if(count($reviews) > 0){
                echo '<h3 style="color:white;font-size:30px;">Recent reviews posted</h1>';
            }else{
                echo '<h3 style="color:white;font-size:25px;">There are no reviews at this time.</h2>';
            }
        ?>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row --> 
   
	
    <table class="table table-hover table-bordered w-25 border rounded-lg">
      <thead class="thead-dark">
        <tr class="table">
          <th scope="col">Username</th>
          <th scope="col">Sauce type</th>
          <th scope="col">Rating</th>
        </tr>
      </thead>
      <?php 
     
        // while($reviewsRow = mysqli_fetch_assoc($reviewResult) ) dont use this, already fetched from above
        foreach($reviews as $reviewRow){ 
            echo '
              <tbody>
               <tr>
              <th scope="row" style="color:white;font-size:20px;">'. $reviewRow['username'] . '</th>
               <th scope="row" style="color:white;font-size:15px;">'. $reviewRow['item'] .' </th>
              <th scope="row" style="color:white;font-size:15px;">' . $reviewRow['rating'] .' </th>
              </tr>';
         }   
 ?> 
  </tbody> 
    </table>

    <div class="text-center">
    <button type="button" class="btn btn-light btn-lg mx-auto" onclick="location.href = 'form.php';">Questions? We can help💭</button>
    </div>
    <div class="text-center">
    <button type="button" class="btn btn-warning btn-lg mx-auto mt-5" onclick="location.href = 'register.php';">Sign up free🔓</button>
       <div>


</body>
<script>
   var this_page = "home";
        var page_title = "HeatZone";
</script>
</html>
