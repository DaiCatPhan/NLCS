<?php
include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email'])  && !empty($_POST['username']) && !empty($_POST['pass'])) {

        $query1 = "SELECT * FROM user";
        $kq = $pdo->prepare($query1);
        $kq->execute([]);
        while($row1 = $kq->fetch()){
            if($_POST['email'] == $row1['email']){
                header("Location:http://localhost/NLCS/public/register.php?error=Tài khoản đã được tạo !!!");
                return;
            }           
        }



        $query = 'INSERT INTO user (email , pass , username) VALUES (?,?,?)';
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_POST['email'],
            $_POST['pass'],
            $_POST['username']
        ]);
        header("Location:http://localhost/NLCS/public/login.php");




    } else {
        echo "Nhập dữ liệu !!! ";
    }
}
