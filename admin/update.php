<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// update data ke database
mysqli_query($conn,"UPDATE user set nama='$nama', email='$email', password='$password' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/user.php");

?>