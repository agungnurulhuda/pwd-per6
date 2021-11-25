//file ini digunakan sebagai menghapus data yang sudah diinputkan
<?php
include "../koneksi.php"; //memanggil file koneksi.php
$sql = "delete from users where id_user= '$_GET[id]'"; //menghapus data user berdasarkan id_user pada database
mysqli_query($con, $sql);
mysqli_close($conn);
header('location:tampil_user.php'); //setelah proses ini selesai maka akan dialihkan pada file tampil_user.php
