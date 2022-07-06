<?php

include "server_connect.php";

if (isset($_POST["addExparince"])) {
    $companyName = $_POST['companyName'];
    $shortBio = $_POST['shortBio'];
    $startJob = $_POST['startJob'];
    $endJob = $_POST['endJob'];

    if (empty($companyName) || empty($shortBio) || empty($startJob) || empty($endJob)) {
        $message = "All File Required";
    } else {
        $insert_exp = "INSERT INTO `experience`(`company_name`, `short_bio`, `start_jobe_date`, `end_jobe_date`) VALUES ('{$companyName}','{$shortBio}','{$startJob}','{$endJob}')";
        $insert_exp_data = mysqli_query($db_config, $insert_exp);
        if ($insert_exp_data == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../exparience.php?msg={$message}");
}


// This For Exparience Update Section


if (isset($_POST["updateExp"])) {

    $exp_id = $_POST['exp_id'];
    $companyName = $_POST['companyName'];
    $shortBio = $_POST['shortBio'];
    $startJob = $_POST['startJob'];
    $endJob = $_POST['endJob'];

    if (empty($companyName) || empty($shortBio) || empty($startJob) || empty($endJob)) {
        $message = "All File Required";
    } else {

        $updateQry = "UPDATE experience SET company_name='{$companyName}', short_bio='{$shortBio}', start_jobe_date='{$startJob}', end_jobe_date='{$endJob}' WHERE id='{$exp_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = " <code>Experience</code>  Update Success";
        } else {
            $message = "<code>Experience</code> Update Fail";
        }
    }
    header("location: ../update_exparience.php?exp_id={$exp_id}&msg={$message}");
}
