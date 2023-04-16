

<?php
    include '../../../config/connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['id_user_update']) && !empty($_POST['id_comment_update'])  && !empty($_POST['noidung_thongbao'])){
            $query = "UPDATE comment SET  noidung=? , created_at = ? WHERE id_user = ? AND id_comment = ?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['noidung_thongbao'],
                $_POST['time_thongbao'],
                $_POST['id_user_update'],
                $_POST['id_comment_update'],
            ]);
            header("Location: http://localhost/NLCS/public/thongbao.php");
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>