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
    
    $messages = array();
    $sql = "SELECT * FROM `form_responses`
            ORDER BY timestamp DESC";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        $messages[] = $row;
    }
?>
<div class="container-fluid">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
        <?php
            if(count($messages) > 0){
                echo '<h1>Contact Form Messages</h1>';
            }else{
                echo '<h2>There are no messages at this time.</h2>';
            }
        ?>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row --> 
    <?php 

    if($_SESSION["role"] > 0){
        foreach($messages as $message){
            echo'
            <div class="row2 mt-5 row w-50 mx-auto border border-dark rounded-lg">
                <div class="col-2"></div>  <!-- spacer -->
                <div class="col-2">'.$message["name"].'<br/>
                    <a href="mailto:'.$message["email"].'">'.$message["email"].'</a><br/>
                    ['.$message["timestamp"].']
                </div>
                <div class="col-6">'.$message["comment"].'</div>
            </div> <!-- /.row -->';
        } //foreach
    }else{
        echo'
        <div class="row mt-3">  
            <div class="col-12 text-center"><h3>You are not authorized to view the messages.</h3></div>
        </div> <!-- /.row -->';
    } //else if       
    ?>
</div>  <!-- /.container-fluid -->
</body>
<script>
    var this_page = "messages";
    var page_title = 'HeatZone | Messages';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
</script>
</html>
