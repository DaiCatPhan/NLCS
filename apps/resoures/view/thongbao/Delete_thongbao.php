<?php
    include '../../../config/connect.php';

    if(isset($_GET['id_comment']) && is_numeric($_GET['id_comment']) && ($_GET['id_comment'] > 0)){

            $query = " DELETE FROM comment WHERE id_comment=?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id_comment']
            ]);
            header("Location: http://localhost/NLCS/public/thongbao.php");

    }    
?>