<?php

require "../server_connect.php";

$edu_id = $_GET['edu_id'];
$updateQry = "UPDATE education SET status=0 WHERE id='{$edu_id}'";

$issubmit = mysqli_query($db_config, $updateQry);


if ($issubmit == true) {
    $message = " <code>Education</code>  Delete Success";
} else {
    $message = "<code>Education</code> Delete Fail";
}

header("location: ../../education.php?edu_id={$edu_id}&msg={$message}");
