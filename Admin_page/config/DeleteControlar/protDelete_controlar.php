<?php

require "../server_connect.php";

$port_id = $_GET['port_id'];

$updateQry = "UPDATE portfolio SET status=0 WHERE id='{$port_id}'";

$issubmit = mysqli_query($db_config, $updateQry);

if ($issubmit == true) {
    $message = " <code>Portfolio</code>  Delete Success";
} else {
    $message = "<code>Portfolio</code> Delete Fail";
}

header("location: ../../portfoli.php?port_id={$port_id}&msg={$message}");
