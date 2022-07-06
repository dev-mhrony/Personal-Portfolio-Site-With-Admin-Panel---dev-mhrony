<?php

require "server_connect.php";

if (isset($_POST["updateCont"])) {
    $cont_id = $_POST['cont_id'];
    $Title = $_POST['Title'];
    $ShortBio = $_POST['ShortBio'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];

    if (empty($Title) || empty($ShortBio) || empty($Email) || empty($PhoneNumber)) {
        $message = "All File Required";
    } else {

        $updateQry = "UPDATE contact SET title='{$Title}', short_bio='{$ShortBio}', email='{$Email}', phone_number='{$PhoneNumber}' WHERE id='{$cont_id}'";

        $issubmit = mysqli_query($db_config, $updateQry);


        if ($issubmit == true) {
            $message = "<code>Contact Info</code> Update Success";
        } else {
            $message = "<code>Contact Info</code> Update Fail";
        }
    }
    header("location: ../update_contactinfo.php?cont_id={$cont_id}&msg={$message}");
}
