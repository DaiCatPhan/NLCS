
<?php
    include '../../../config/connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['username']) && !empty($_POST['mssv'])  && !empty($_POST['email'])  && !empty($_POST['lop'])  && !empty($_POST['detai'])){
            $query = "UPDATE user SET username=?, mssv=?, email=?, lop=?, detai=? WHERE id_user = ?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['username'],
                $_POST['mssv'],
                $_POST['email'],
                $_POST['lop'],
                $_POST['detai'],
                $_GET['id_user']
            ]);
            header("Location: http://localhost/NLCS/public/quanlisinhvien.php");
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>