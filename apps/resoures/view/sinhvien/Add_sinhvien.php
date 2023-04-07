<?php
include '../../../config/connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['username'])  && !empty($_POST['mssv'])  && !empty($_POST['lop'])  && !empty($_POST['pass']) && !empty($_POST['detai'])) {

        $query1 = "SELECT * FROM user";
        $kq = $pdo->prepare($query1);
        $kq->execute([]);
        while ($row1 = $kq->fetch()) {
            if ($_POST['email'] == $row1['email']) {
                header("Location:http://localhost/NLCS/public/Add_sinhvien.php?err= Sinh viên đã được tạo !!!");
                return;
            }
        }

        $_SESSION['username_addbook'] = $_POST['username'];


        $query = 'INSERT INTO user (email , username , mssv , lop , pass,  detai) VALUES (?,?,?,?,?,?)';
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_POST['email'],
            $_POST['username'],
            $_POST['mssv'],
            $_POST['lop'],
            $_POST['pass'],
            $_POST['detai']
        ]);
        // header("Location:http://localhost/NLCS/public/quanlisinhvien.php");
        header("Location: ../sinhvien/nhap.php");

    } else {
        echo "Nhập dữ liệu !!!";
    }
}
