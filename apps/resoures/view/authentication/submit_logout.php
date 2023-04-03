
<?php
session_start();

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    header("Location: http://localhost/NLCS/public/login.php");
} else {
    header("Location: http://localhost/NLCS/public/login.php");
}
?>