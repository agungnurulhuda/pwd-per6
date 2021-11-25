<?php
include "../koneksi.php"; //memanggil file koneksi.php
$id_user = $_POST['id_user']; //menampung data id_user
$nama = $_POST['nama']; //menampung data nama
$email = $_POST['email']; //menampung data email
$pass = md5($_POST['password']); //menampung data password
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$pass', '$nama','$email')"; //memasukan dalam data base

$query = mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_user.php');
