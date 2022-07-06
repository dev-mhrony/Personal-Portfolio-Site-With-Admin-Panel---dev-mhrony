<?php

include "./server_connect.php";

if (isset($_POST["addPortfolio"])) {

    $upload_status = false;
    if (isset($_FILES['image'])) {
        $mainFileArray      = $_FILES['image'];
        $file_name          = $mainFileArray['name'];
        $file_temp_location = $mainFileArray['tmp_name'];
        $file_size          = $mainFileArray['size'];

        $file_extArry = explode(".", $file_name);
        $file_extention = strtolower(end($file_extArry));
        $validExtention = array('jpg', 'jpeg', 'png');

        $rendome_file_name = time() . "." . $file_extention;

        if (in_array($file_extention, $validExtention)) {

            move_uploaded_file($file_temp_location, '../Upload/PortfolioUpload/' . $rendome_file_name);
            $upload_status = true;
        } else {
            $message = $file_extention . " is not Suported";
        }
    }
    $projectName = $_POST['projectName'];
    $projectBio = $_POST['projectBio'];
    $catagory = $_POST['catagory'];
    $cintName = $_POST['cintName'];
    $projectLanguage = $_POST['projectLanguage'];
    $projectPreview = $_POST['projectPreview'];

    if (empty($projectName) || empty($projectBio) || empty($catagory) || empty($cintName) || empty($projectLanguage) || empty($projectPreview) || $upload_status == false) {
        $message = "All File Required";
    } else {
        echo $insert_portfolio = "INSERT INTO `portfolio`(`project_name`, `project_bio`, `category`, `clint_name`, `project_language`, `project_preview_link`, `image`) VALUES ('$projectName','$projectBio','$catagory','$cintName','$projectLanguage','$projectPreview', '$rendome_file_name')";


        $insert_port_list = mysqli_query($db_config, $insert_portfolio);

        if ($insert_port_list == true) {
            $message = "Insert Success";
        } else {
            $message = "Insert Fail";
        }
    }
    header("location: ../portfoli.php?msg={$message}");
}


// This For Portfolio Update Section


if (isset($_POST["updatPort"])) {

    $port_id = $_POST['port_id'];
    $projectName = $_POST['projectName'];
    $projectBio = $_POST['projectBio'];
    $catagory = $_POST['catagory'];
    $cintName = $_POST['cintName'];
    $projectLanguage = $_POST['projectLanguage'];
    $projectPreview = $_POST['projectPreview'];
    $img = $_POST['img'];

    if (empty($projectName) || empty($projectBio) || empty($catagory) || empty($cintName) || empty($projectLanguage) || empty($projectPreview)) {
        $message = "All File Required";
    } else {

        $updateQry = "UPDATE portfolio SET project_name='{$projectName}', project_bio='{$projectBio}', category='{$catagory}', clint_name='{$cintName}', project_language='{$projectLanguage}', project_preview_link='{$projectPreview}' WHERE id='{$port_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = " <code>Portfolio</code>  Update Success";
        } else {
            $message = "<code>Portfolio</code> Update Fail";
        }
    }
    header("location: ../update_portfolio.php?port_id={$port_id}&msg={$message}");
}
