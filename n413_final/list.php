<?php
    include("n413finalConnect.php");            
    include("head.php");
    //try to fetch row and give the two id's a specific variable name
    $sql = "SELECT id, item, description, image FROM `list`";
    $result = mysqli_query($link, $sql);
        $records = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
            $records[] = $row;
        }
?>
    <style>
        .cursor-pointer {cursor:pointer;}
        .list-group{
         margin:2px;
        display: inline-block;
        }
        .list-wrapper{
            float:left;
            width: 40%;
        }


 
    </style>
    <div class="container-fluid ml-2 ">
        <div id="headline" class="row mt-5">
            <div class="col-12 text-center">
                <h2>Hot Sauce Top 10 List</h2>            
            </div> <!-- /.col-12 -->
        </div> <!-- /.row -->
        <?php
            foreach ($records as $record){
                echo '
                <div class="list-wrapper  mt-3 cursor-pointer w-50 list-group-item-action list-group-item-warning mr=1">
                 <ul class="list-group record-item" data-id="'.$record["id"].'" data-item="'.$record["item"].'">
                    <li class="list-group-item"><img src="'.$record["image"].'" height="200"/></li>
                    <li class="list-group-item"><b>'.$record["item"].': </b> '.$record["description"].'</li> 
                    </ul>
                </div>
                 <!-- /.row -->';
            } //foreach
        ?>         
    </div> <!-- /.container-fluid -->
</body>
  <script>
     var this_page = "list";
        var page_title = "Hot Sauce Top Ten";
        $(document).ready(function(){ 
        $("#"+this_page+"_item").addClass('active'); 
        $("#"+this_page+"_link").append(' <span class="sr-only">(current)</span>');
            document.title = page_title;
				
        $(".record-item").on("click", function(){
            var id = $(this).data('id');
            show_detail(id);
            }); //on()
}); //document.ready
			
function show_detail(id){
    window.location.assign("detail.php?id="+id);
}
  </script>
</html>