
<style>
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #343C45;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */

/* Add a background color and some padding around the form */
.row2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>



<?php
    include("head.php");
?>

<div class="container-fluid">
    <div id="headline" class="row  mt-5">
        <div class="col-12 text-center">
            <h2>HeatZone Log-in</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <form id="login_form" method="POST" action="">
    <div class="row2  mt-5 row w-50 mx-auto border border-dark rounded-lg">
        <div class="col-4"></div>  <!-- spacer -->
        <div id="form-container" class="col-4">
            User Name: <input type="text" id="username" name="username" class="form-control" value="" placeholder="Enter User Name" required/><br/>
            Password: <input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password" required/><br/>
            <button type="submit" id="submit" class="btn btn-dark float-right">Submit</button>
        </div>  <!-- /#form-container -->
    </div>  <!-- /.row -->
</form>
</body>
<script>
    var this_page = "login";
    var page_title = 'HeatZone | Login';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
            
            $("#login_form").submit(function(event){
                event.preventDefault();
                $.post("n413finalAuth.php",
                       $("#login_form").serialize(),
                       function(data){
                       	    //handle messages here
                            if(data.status){
                                $("#form-container").html(data.success);
                                right_navbar_update(data.role);
                            }else{
                                $("#form-container").html(data.failed);
                            }
                           },
                       "json"
                ); //post
            }); //submit 
            
        }); //document.ready
    

       
        //taking all of this code out (line88-below) causes no visible navbar showing
    function right_navbar_update(role){
        var html = "";
        if (role > 0) {
            html =  '<li id="messages_item" class="nav-item">'+
                    '<a id="messages_link" class="nav-link" href="messages.php"><h5 style="color:black">Messages</h5></a>'+
                    //other spot where this is implemented is the head.php
                    '<li id="approve_item" class="nav-item">'+
                    '<a id="approve_link" class="nav-link" href="approve.php"><h5 style="color:black">Approve/Deny</h5></a>'+
                    '</li>';
        }
        html += '<li id="logout_item" class="nav-item">'+
                '<a id="logout_link" class="nav-link" href="logout.php"><h5 style="color:black">Log-Out</h5></a>'+
                '</li>';		
        $("#right_navbar").html(html);
    }
    
</script>
</html>