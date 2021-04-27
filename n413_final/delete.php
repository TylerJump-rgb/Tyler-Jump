<?php
    include("n413finalConnect.php");
    include("head.php");

   // $itemId = $_SESSION["item_id"];
    $id = intval($_POST["Deny"]);
    $delSql = mysqli_query($link,"DELETE from reviews WHERE id = '$id'"); // delete query

    if($delSql)
    {
        mysqli_close($link); // Close connection
        header("Location: approve.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
