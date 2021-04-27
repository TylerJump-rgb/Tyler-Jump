<?php
    include("n413finalConnect.php");            
    include("head.php");
    $reviews = array();
    $reviewSql = "SELECT r.id, u.username, l.item, r.rating FROM reviews r, list l, users_hash u WHERE r.item = l.id AND r.user = u.id AND r.approve = 0";
    $result = mysqli_query($link, $reviewSql);
   
    echo '<table class="table table-hover table-bordered table-striped mt-5 w-50 mx-auto border border-dark rounded-lg">
    
    <thead class="thead-dark">
      <tr class="table">
        <th scope="col">User</th>
        <th scope="col">Item</th>
        <th scope="col">Rating</th>
        <th scope="col">Approve</th>
        <th scope="col">Deny</th>
      </tr>
    </thead>';
 
    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['item'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . '<form method="POST" action="approved.php"><input type="hidden"  name="Approve" value='.$row['id'].'><input type="submit" name="submit_btn" value="Approve"></form>' . "</td>";
    echo "<td>" . '<form method="POST" action="delete.php"><input type="hidden"  name="Deny" value='.$row['id'].'><input type="submit" name="deny_btn" value="Deny" ></form>' . "</td>";
    echo "</tr>";
}
echo "</table>";
     
 ?>
