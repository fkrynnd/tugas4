<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=./home.php"/>
    <center><h2>Cieee, Berhasil Logout</h2>kamu akan dialihkan kembali ke halaman login, bukan ke masa lalu yaaa</center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Yaaah, Gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>kamu akan dialihkan kembali ke halaman login secepatnya</center>
    <?php
}
?>