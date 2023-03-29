
<?php
session_start();

if (isset($_SESSION['username'])) {
    if ($_SESSION['username'] == 'admin') {
        unset($_SESSION['username']);
        header("Location: http://localhost/NLCS/public/login_admin.php");
    } else {
        unset($_SESSION['username']);
        header("Location: http://localhost/NLCS/public/login.php");
    }
} else {
    header("Location: http://localhost/NLCS/public/login.php");
}
?>