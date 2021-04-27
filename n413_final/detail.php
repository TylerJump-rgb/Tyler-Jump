
<?php
    include("n413finalConnect.php");            
    include("head.php");

    $id = intval($_GET["id"]);
    $_SESSION["item_id"] = $id;
    $sql = "SELECT * FROM `list` WHERE id = '".$id."'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    $sql2 = "SELECT r.rating FROM reviews r, list l WHERE l.id = r.item AND r.approve = 1 AND l.id = $id";
    $result2 = mysqli_query($link, $sql2);
    $reviewCount = mysqli_num_rows($result2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_BOTH);

?>
<div class="container-fluid">
        <div id="headline" class="row mt-5">
            <div class="col-12 text-center">
            <?php
               if($row){
                   echo '<h1>'.$row["item"].'</h1>';
               }else{
                   echo '<h2>There has been a database error.</h2>';
               }
            ?>
            </div> <!-- /.col-12 -->
        </div> <!-- /.row --> 
        <?php
            if($row){ 
                echo '      
                <div id="content" class="row mt-3 w-75 mx-left">
                    <div class="col-1"></div>  <!-- spacer -->
                    <div class="col-5"><img src="'.$row["image"].'" height="300" /></div> 
                    <div class="col-5 h3 mx-left">'.$row["description"].'</div>
                 <!-- /.row -->';
                }
        ?>

<!-- name="rate" id="rate-1" and value associated with star -->
   <?php if(isset($_SESSION["role"])){
       echo '
       <div class="row2  mt-5 row w-50 mx-auto border border-dark rounded-lg">
       <h5>Please leave a review on the hotsauce!</h5> 

       <form action="reviewPost.php" method="POST"> 

       <div id="form-container">

         <div class="star-widget">
           <input type="radio" id="rate-5" name="rate" value="5" />

           <label for="rate-5" class="fas fa-star">☆</label>

           <input type="radio" id="rate-4" name="rate" value="4" />

           <label for="rate-4" class="fas fa-star">☆</label>

           <input type="radio" id="rate-3" name="rate" value="3" />

           <label for="rate-3" class="fas fa-star">☆</label>

           <input type="radio" id="rate-2" name="rate" value="2" />

           <label for="rate-2" class="fas fa-star">☆</label>

           <input type="radio" id="rate-1" name="rate" value="1" />

           <label for="rate-1" class="fas fa-star">☆</label>
         </div>
         <script>
                const btn = document.querySelector("button");
                const post = document.querySelector(".post");
                const widget = document.querySelector(".star-widget");
                const editBtn = document.querySelector(".edit");
             btn.onclick = ()=>{
              widget.style.display = "none";
              post.style.display = "block";
               editBtn.onclick = ()=>{
               widget.style.display = "block";
              post.style.display = "none";
            }
           return false;
        }
        </script>
        <div class= "btn">
          <input type="submit" id="submit" value="Submit"/>
        </div>
        </div>
        </form>
        </div>
';
}
?>

