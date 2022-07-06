<?php

require "../server_connect.php";

$sm_id = $_GET['sm_id'];

$updateSkillQry = "UPDATE social_media SET status=0 WHERE id='{$sm_id}'";

$issubmit_info = mysqli_query($db_config, $updateSkillQry);

if ($issubmit_info == true) {

    $message = " <code>Social Media</code> Info Delete Success";
} else {

    $message = " <code>Social Media</code> Info Delete Fail";
}

header("location: ../../social_link.php?sm_id={$sm_id}&msg={$message}");
