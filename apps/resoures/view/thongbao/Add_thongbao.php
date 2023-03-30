<?php
    include '../../../config/connect.php';
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_SESSION['id_user']) && !empty($_POST['noidung'])){
            $query = 'INSERT INTO comment (id_user , noidung) VALUES (?,?)' ;
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_SESSION['id_user'],
                $_POST['noidung'],
                
            ]);
            header("Location:http://localhost/NLCS/public/thongbao.php");
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>