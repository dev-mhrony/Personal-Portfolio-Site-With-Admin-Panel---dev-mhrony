<?php

include "server_connect.php";

if (isset($_POST["UpdateWork"])) {

    $work_id = $_POST['work_id'];
    $Experience = $_POST['Experience'];
    $HappyCustomar = $_POST['HappyCustomar'];
    $CompletProject = $_POST['CompletProject'];
    $Awards = $_POST['Awards'];


    if (empty($Experience) || empty($HappyCustomar) || empty($CompletProject) || empty($Awards)) {

        $message = "All File Required";
    } else {

        $updateQry = "UPDATE about_work SET experience_by_year='{$Experience}', happy_customar='{$HappyCustomar}', complet_project='{$CompletProject}', awards='{$Awards}'  WHERE id='{$work_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = " <code>Work</code>  Update Success";
        } else {
            $message = " <code>Work</code> Update Fail";
        }
    }
    header("location: ../update_workinfo.php?work_id={$work_id}&msg={$message}");
}


// This For Education Update Section