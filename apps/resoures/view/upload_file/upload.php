<h1>Upload</h1>

<?php
include '../../../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES;


    echo '<pre>';
    print_r($file);
    echo '</pre>';

    // $filepath = $_FILES['fileupload']['name'];

    // upload file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);

    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
    header("Location: http://localhost/NLCS/public/nopbaitap.php?nopfile=Đã nộp");
}
?>