<?php

require "server_connect.php";

if (isset($_POST["UpdateAboutInfo"])) {

    $about_id = $_POST['about_id'];
    $FirstName = $_POST['FirstName'];
    $LirstName = $_POST['LirstName'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Nationality = $_POST['Nationality'];
    $Freelance = $_POST['Freelance'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Langages = $_POST['Langages'];

    if (empty($FirstName) || empty($LirstName) || empty($DateOfBirth) || empty($Nationality) || empty($Freelance) || empty($Address) || empty($Email) || empty($PhoneNumber) || empty($Langages)) {
        $message = "All File Required";
    } else {

        $updateQry = "UPDATE about_info SET fast_name='{$FirstName}', last_name='{$LirstName}', age='{$DateOfBirth}', freelance='{$Freelance}', address='{$Address}', phone_number='{$PhoneNumber}', email='{$Email}', language='{$Langages}'  WHERE id='{$about_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = "Update Success";
        } else {
            $message = "Update Fail";
        }
    }
    header("location: ../update_aboutinfo.php?about_id={$about_id}&msg={$message}");
}
