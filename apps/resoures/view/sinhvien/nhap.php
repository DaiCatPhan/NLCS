
<?php
include '../../../config/connect.php';
session_start();

if ($_SESSION['username_addbook']) {
    // Lay session xuong sosanh trong bảng user tìm id_user dẻ khởi tạo các bảng khác
    $username_addbook = $_SESSION['username_addbook'];
    $query = "SELECT * FROM user WHERE username = ?";
    $sth = $pdo->prepare($query);
    $sth->execute([
        $username_addbook
    ]);
    $row = $sth->fetch();

    // Tim thấy id_user và gán biến
    $id_user_addbook = $row['id_user'];

    // Xoa sesstion
    unset($_SESSION['username_addbook']);


    // Khoi tao bang diem
    $query1 = 'INSERT INTO diem (id_user ) VALUES (?)';
    $sth1 = $pdo->prepare($query1);
    $sth1->execute([
        $id_user_addbook
    ]);

    // Khoi tao bang fileupload
    $query2 = 'INSERT INTO fileupload (id_user ) VALUES (?)';
    $sth2 = $pdo->prepare($query2);
    $sth2->execute([
        $id_user_addbook
    ]);

    // Khoi tao bang điểm danh
    $query3 = 'INSERT INTO diemdanh (id_user ) VALUES (?)';
    $sth3 = $pdo->prepare($query3);
    $sth3->execute([
        $id_user_addbook
    ]);
    header("Location:http://localhost/NLCS/public/quanlisinhvien.php");
}

?>