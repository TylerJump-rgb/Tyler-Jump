
<style>
.row2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>



<?php
    include("n413finalConnect.php");
    include("head.php");
    $rate = $_POST["rate"];
    $item = $_SESSION["item_id"];
  $user = $_SESSION["user_id"];
    function sanitize($item){
            global $link;
            $item = html_entity_decode($item);
            $item = trim($item);
            $item = stripslashes($item);
            $item = strip_tags($item);
            $item = mysqli_real_escape_string( $link, $item );
            return $item;
        }
        $sql = "INSERT INTO `reviews` (`user`, `item`, `rating`, `approve`) 
        	VALUES ('".$user."', '".$item."', '".$rate."', 0)";
        $result = mysqli_query($link, $sql);
?>
<div class="container-fluid">
  
    </div> <!-- /row -->
    <div class="row mt-5">
        <div class="col-4"></div>  <!-- spacer -->
        <div id="message-container" class="col-4 text-center">
        <?php
            if($result){
                echo '    <div class="row2  mt-5 row w-50 mx-auto border border-dark rounded-lg">

                        <p>Thank you for submitting your rating! Please check the home page. <br/>
                        </div>';
            }else{
                echo '<p>Sorry, but something went wrong.  Please try again later. <br/>';
            }
        ?>
            <span class="mt-5 float-right"><i>The Heat Team</i></span></p>
            
        </div> <!-- /.message-container --> 
    </div> <!-- /.row --> 
</div>  <!-- /.container-fluid -->
</body>
<script>
    var this_page = "review";
    var page_title = 'Reviews';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
</script>
</html>