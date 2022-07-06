<?php

require "server_connect.php";

// This For Skill Add Section

if (isset($_POST["skillSubmit"])) {
    $SkillName = $_POST['SkillName'];
    $Percentage = $_POST['Percentage'];
    $Experience = $_POST['Experience'];




    if (empty($SkillName) || empty($Percentage) || empty($Experience)) {
        $message = "All File Required";
    } else {
        $insert_skill = "INSERT INTO `skill`(`skill_name`, `percentage`, `experience`) VALUES ('$SkillName','$Percentage','$Experience')";

        $insert_skill_list = mysqli_query($db_config, $insert_skill);

        if ($insert_skill_list == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../skill.php?msg={$message}");
}


// This For Skill Update Section


if (isset($_POST["updateSkill"])) {

    $skill_id = $_POST['skill_id'];
    $skillName = $_POST['skillName'];
    $percentage = $_POST['percentage'];
    $experience = $_POST['experience'];


    if (empty($skillName) || empty($percentage) || empty($experience)) {

        $message = "All File Required";
    } else {

        $updateSkillQry = "UPDATE skill SET skill_name='{$skillName}', percentage='{$percentage}', experience='{$experience}' WHERE id='{$skill_id}'";

        $issubmit_info = mysqli_query($db_config, $updateSkillQry) or die(mysqli_error($db_config));

        if ($issubmit_info == true) {

            $message = " <code>Skill</code> Info Update Success";
        } else {

            $message = " <code>Skill</code> Info Update Fail";
        }
    }
    header("location: ../update_skill.php?skill_id={$skill_id}&msg={$message}");
}
