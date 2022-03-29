<?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<script>window.location.replace("./index.php");</script>';
    } else {
    $email = "admin@gmail.com";
    $password = "123456";
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if($_POST['email'] == $email && $_POST['password'] == $password) {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
            echo "<center><h1>Berhasil, sebentar lagi kamu akan di alihkan halaman utama</h1></center>";
        } elseif($_POST['email'] != $email && $_POST['password'] == $password) {
            echo "<center><h1>Gagal!, Email Salah</h1></center>";
        } elseif($_POST['email'] == $email && $_POST['password'] != $password) {
            echo "<center><h1>Gagal!, Password Salah</h1></center>";
        } elseif($_POST['email'] != $email && $_POST['password'] != $password) {
            echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
        } 
    } else {
        echo "<center><h1>Gagal, ulangi isi Username & Password nya ges</h1></center>";
    }
    }
?>