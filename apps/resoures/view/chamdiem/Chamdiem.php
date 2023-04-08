<?php
include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['diemso']) && isset($_GET['id_user'])) {
        $query = "UPDATE diem  SET diem = ? WHERE id_user = ?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['diemso'],
                $_GET['id_user']
            ]);
            header("Location: http://localhost/NLCS/public/chamdiem.php");
    } else {
        echo "Nhập dữ liệu !!!";
    }
}
