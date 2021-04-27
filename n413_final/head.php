<!DOCTYPE html>
<html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>HeatZone Project</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/css.css" rel="stylesheet">
            <script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
            <script src="js/bootstrap.min.js" type="application/javascript"></script>
          <script src="js/bootstrap.min.js.map" type="application/javascript"></script> 
            <!---Below is the test scripting for star rating system -->

            <script>    
                function navbar_update(this_page){
                    $("#"+this_page+"_item").addClass('active');
                    $("#"+this_page+"_link").append(' <span class="sr-only">(current)</span>');
                }
            </script>    
          <style>
              .navbar-nav > li{
                margin-left:10px;
                margin-right:10px;
                 }
                 .navbar-custom{
                     background-image: linear-gradient(to right, red, yellow);
                     opacity: 0.80;
                 }
                #logo_item {
                word-wrap: break-word;
                max-width: 140px;

        }
        
              </style>
        </head>
        <body>
            <nav class="navbar-custom navbar-expand-lg border-bottom border-dark">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-auto">
                  <li id="logo_item" class="nav-item">
                          <a id="home_link" class="nav-link"><h5 style="color: black">Welcome to the HeatZone</h5></a>
                      </li>
                      <li id="home_item" class="nav-item">
                          <a id="home_link" class="nav-link" href="index.php"><h5 style="color: black">Home</h5></a>
                      </li>
                       
                      <li id="list_item" class="nav-item">
                          <a id="list_link" class="nav-link" href="list.php"><h5 style="color: black">List of Sauces</h5></a>
                      </li>
                       </br>
                      <li id="contact_item" class="nav-item">
                          <a id="contact_link" class="nav-link" href="form.php"><h5 style="color: black">Contact us!</h5></a>
                      </li>
                  </ul>
                  <ul id="right_navbar" class="navbar-nav ml-auto mr-5">
                  
                  <?php 
               if(!isset($_SESSION)){
                session_start();
                }
                
                    //after refresh, one tab closes and the other opens, first is messages, and then its the approve/deny that only shows, this must be from
                    // the login.php file that needs to be fixed.

                    //IF SIGNED IN AS REGULAR USER, LOGOUT SHOWS AND MESSAGES DO NOT (GOOD), FONT IS WHITE.
                     if(isset($_SESSION["user_id"])){
                          if($_SESSION["role"] > 0){
                              echo '<li id="messages_item" class="nav-item">
                                 <a id="messages_link" class="nav-link" href="messages.php"><h5 style="color:black">Messages</h5></a>
                                 <li id="approve_item" class="nav-item">
                                 <a id="approve_link" class="nav-link" href="approve.php"><h5 style="color:black">Approve/Deny</h5></a>
                               ';
                          }
                          echo '
                              <li id="logout_item" class="nav-item">
                                  <a id="logout_link" class="nav-link" href="logout.php"><h5 style="color:black">Log-Out</h5></a>
                              </li>';
                      }else {
                          echo ' 
                              <li id="register_item" class="nav-item">
                                  <a id="register_link" class="nav-link" href="register.php"><h5 style="color: black">Register</h5></a>
                              </li>      
                              <li id="login_item" class="nav-item">
                                  <a id="login_link" class="nav-link" href="login.php"><h5 style="color: black">Log-In</h5></a>
                              </li>';
                      }
                      
               
                  ?>
                  </ul>           
               </div>
            </nav>
            