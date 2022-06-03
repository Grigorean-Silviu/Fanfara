<?php
$file_upload = $_FILES["file.upload"];
    move_uploaded_file($_FILES['tmp_name'], "upload_local/".$file_upload["name"]);
?>