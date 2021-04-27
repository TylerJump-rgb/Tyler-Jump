<?php
    include("n413finalConnect.php");
    include("head.php");

   // $itemId = $_SESSION["item_id"];
    $id = intval($_POST["Approve"]);
    $upSql = mysqli_query($link,"UPDATE reviews SET approve = 1 WHERE id = '$id'"); // delete query

    if($upSql)
    {
        mysqli_close($link); // Close connection
        header("Location: approve.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error approving record"; // display error message if not delete
    }
    ?>
