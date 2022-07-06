<?php
require "../server_connect.php";

$skill_id = $_GET['skill_id'];

$updateSkillQry = "UPDATE skill SET status=0 WHERE id='{$skill_id}'";

$issubmit_info = mysqli_query($db_config, $updateSkillQry);

if ($issubmit_info == true) {

    $message = " <code>Skill</code> Info Delete Success";
} else {

    $message = " <code>Skill</code> Info Delete Fail";
}

header("location: ../../skill.php?skill_id={$skill_id}&msg={$message}");
