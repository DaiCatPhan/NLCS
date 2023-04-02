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
            if($_SESSION['username']=='admin'){
                header("Location:http://localhost/NLCS/public/thongbao.php");
            }else{
                header("Location:http://localhost/NLCS/public/thongbao_user.php");
            }
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>