
<?php
    include '../../../config/connect.php';

    if(isset($_GET['id_user']) && is_numeric($_GET['id_user']) && ($_GET['id_user'] > 0)){
        $query = " DELETE FROM user WHERE id_user=?";
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_GET['id_user']
        ]);
        header("Location:".$_SERVER['HTTP_REFERER']."   ");
    }    
?>
