
<?php

include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['username'];
    $query1 = "SELECT * FROM user WHERE username = '$user' ";
    $kq = $pdo->prepare($query1);
    $kq->execute([]);
    $row1 = $kq->fetch();

    $id_user = $row1['id_user'];

    if (isset($id_user)) {
        // update so ngay vang vao bang
        if (isset($_POST['vang'])) {

            $query = "UPDATE diemdanh SET  vang=? WHERE id_user = ?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['vang'],
                $id_user
            ]);
            header("Location:" . $_SERVER['HTTP_REFERER'] . "");
            
        }
    }
}


?>