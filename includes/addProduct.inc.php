<?php

session_start();
$msg = "";

if (isset($_POST['upload'])) {
    require_once("class-autoload.inc.php");
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/" . $filename;


    $image = new Uploadcontrol($filename, $name, $code, $type, $price);

    $image->createImages();


    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3> Image uploaded successfully!</h3>";
        header("location: ../productview.php");
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }
}
?>