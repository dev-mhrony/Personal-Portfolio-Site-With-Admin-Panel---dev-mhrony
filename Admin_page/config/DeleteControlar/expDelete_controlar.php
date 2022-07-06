<?php
require "../server_connect.php";

$exp_id = $_GET['exp_id'];


$updateQry = "UPDATE experience SET status=0 WHERE id='{$exp_id}'";

$issubmit = mysqli_query($db_config, $updateQry);


if ($issubmit == true) {
    $message = " <code>Experience</code>  Delete Success";
} else {
    $message = "<code>Experience</code> Delete Fail";
}

header("location: ../../exparience.php?exp_id={$exp_id}&msg={$message}");
