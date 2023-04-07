<?php
    include '../../../config/connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['username'])  && !empty($_POST['mssv'])  && !empty($_POST['lop'])  && !empty($_POST['pass']) && !empty($_POST['detai'])){
            $query = 'INSERT INTO user (email , username , mssv , lop , pass,  detai) VALUES (?,?,?,?,?,?)' ;
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['email'],
                $_POST['username'],
                $_POST['mssv'],
                $_POST['lop'],
                $_POST['pass'],
                $_POST['detai']
            ]);


            header("Location:http://localhost/NLCS/public/quanlisinhvien.php");
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>