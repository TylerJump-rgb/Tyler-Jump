<?php
    session_start();
    unset($_SESSION);
    session_destroy();
    include("head.php");
?>
<div class="container-fluid">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
            <h2>HeatZone logout</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <div class="row mt-5">
        <div class="col-4"></div>  <!-- spacer -->
        <div class="col-4 text-center">
        <h3>You are now Logged Out.</h3>
        <a href="login.php"><button class="btn btn-dark mt-5">Log In</button></a>
        </div> <!-- /.col-4 -->
    </div> <!-- /.row --> 
</div>  <!-- /.container-fluid -->
</body>
<script>
    var this_page = "logout";
    var page_title = 'HeatZone | Logout';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
</script>
</html>