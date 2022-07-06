<?php

include "./server_connect.php";

if (isset($_POST["add_socialMedia"])) {
    $socialName = $_POST['socialName'];
    $SocialLink = $_POST['SocialLink'];


    if (empty($socialName) || empty($SocialLink)) {
        $message = "All File Required";
    } else {
        $insert_social_media = "INSERT INTO `social_media`(`social_media_name`, `social_media_link`) VALUES ('$socialName','$SocialLink')";

        $insert_socalMedia_list = mysqli_query($db_config, $insert_social_media);

        if ($insert_socalMedia_list == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../social_link.php?msg={$message}");
}


// This For Social Media Update Section


if (isset($_POST["updateSM"])) {

    $sm_id = $_POST['sm_id'];
    $socialName = $_POST['socialName'];
    $SocialLink = $_POST['SocialLink'];


    if (empty($socialName) || empty($SocialLink)) {

        $message = "All File Required";
    } else {

        $updateSkillQry = "UPDATE social_media SET social_media_name='{$socialName}', social_media_link='{$SocialLink}'WHERE id='{$sm_id}'";

        $issubmit_info = mysqli_query($db_config, $updateSkillQry);

        if ($issubmit_info == true) {

            $message = " <code>Social Media</code> Info Update Success";
        } else {

            $message = " <code>Social Media</code> Info Update Fail";
        }
    }
    header("location: ../update_socialmedia.php?sm_id={$sm_id}&msg={$message}");
}
