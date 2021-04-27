<style>
/* Style inputs with type="text", select elements and textareas */
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
   //add this after head.php is complete
   include("head.php");
?>
	<!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row w-50 mx-auto border border-dark rounded-lg">
    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="n413finalPost.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="comment" name="comment" rows="2" class="form-control md-textarea"></textarea>
                        <label for="comment">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->
        </form>

        <div class="text-center text-md-left">
        <input type="submit" id="submit" value="Submit" />
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Indianapolis, IN 46205, USA</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>contact@HeatZone.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
	</body>
	<script>
    var this_page = "contact";
    var page_title = 'HeatZone | Contact Form';
		
        //update 
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
</script>
</html>


