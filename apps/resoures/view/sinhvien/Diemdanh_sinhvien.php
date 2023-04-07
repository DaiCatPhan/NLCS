
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
        $query2 = "SELECT * FROM diemdanh WHERE id_user = $id_user ";
        $sth2 = $pdo->prepare($query2);
        $sth2->execute([]);
        $row = $sth2->fetch();
        if ($row) {
            if (isset($_POST['username']) && isset($_POST['vang'])) {

                $query = "UPDATE diemdanh SET  vang=? WHERE id_user = ?";
                $sth = $pdo->prepare($query);
                $sth->execute([
                    $_POST['vang'],
                    $id_user
                ]);
                header("Location:" . $_SERVER['HTTP_REFERER'] . "");
                
            }
        } 
        else {
            $query = 'INSERT INTO diemdanh (id_user , vang) VALUES (?,?)';  
            $sth = $pdo->prepare($query);
            $sth->execute([
                $id_user,
                $_POST['vang']
            ]);
            header("Location:" . $_SERVER['HTTP_REFERER'] . "");
        }
    }
}


?>