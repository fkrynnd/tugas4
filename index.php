<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<center><h1>Selamat Datang ;)</h1><br/><a href="./logout.php">Logout</a>';
} else {
    echo '<script>window.location.replace("./home.php");</script>';
}
?>