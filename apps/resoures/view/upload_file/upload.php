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

    echo $_SESSION['id_user'];
    echo $filename;

    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);

    if(!empty($filename) && !empty($_SESSION['id_user']) ){
        $query = 'INSERT INTO fileupload (id_user , noidung_file ) VALUES (?,?)' ;
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_SESSION['id_user'],
            $filename
        ]);
        header("Location: http://localhost/NLCS/public/nopbaitap.php");
    }
}
?>