<?php
include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['diemso']) && isset($_GET['id_user'])) {
        // Kiểm tra xem id_user đã được chấm điểm hay chưa
        $query1 = "SELECT * FROM diem WHERE id_user = {$_GET['id_user']}";
        $sth1 = $pdo->prepare($query1);
        $sth1->execute([]);
        $row = $sth1->fetch();
        // Nếu đã chấm điểm thì update điểm
        if ($row) {
            $query2 = "UPDATE diem  SET diem = ? WHERE id_user = ?";
            $sth2 = $pdo->prepare($query2);
            $sth2->execute([
                $_POST['diemso'],
                $_GET['id_user']
            ]);
            header("Location: http://localhost/NLCS/public/chamdiem.php");
        } else { 
            // Nếu chưa chấm điểm thì chấm điểm insert vào bản
            $query3 = "INSERT INTO diem (id_user , diem) VALUE(? ,?) ";
            $sth3 = $pdo->prepare($query3);
            $sth3->execute([
                $_GET['id_user'],
                $_POST['diemso']    
            ]);
            header("Location: http://localhost/NLCS/public/chamdiem.php");

        }
    } else {
        echo "Nhập dữ liệu !!!";
    }
}
