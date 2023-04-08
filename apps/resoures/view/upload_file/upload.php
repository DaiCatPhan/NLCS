<h1>Upload</h1>

<?php
include '../../../config/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES;


    echo '<pre>';
    print_r($file);
    echo '</pre>';

    // $filepath = $_FILES['fileupload']['name'];

    // upload file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
    $filename = $_FILES["fileupload"]["name"];

    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);

    // XU li dua du lieu vao bang

    if (isset($filename) && isset($_SESSION['id_user'])) {
        $query2 = 'UPDATE fileupload SET noidung_file =? WHERE id_user = ?';
        $sth2 = $pdo->prepare($query2);
        $sth2->execute([
            $filename,
            $_SESSION['id_user']
        ]);
        header("Location: http://localhost/NLCS/public/nopbaitap.php");
    }
}
?>