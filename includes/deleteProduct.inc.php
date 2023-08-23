<?php


$msg = "";

if (isset($_POST['submit'])) {
    require_once("class-autoload.inc.php");

    $image = new UploadControl("", "", "", "", "");

    $image->deleteImages($_POST);

    header("location: ../product-list.php");
} else {
    header("location: ../product-list.php?error=invalid!");
}
?>