<?php
include('koneksi.php');

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = "member";


    $mysqli = "INSERT INTO user(nama, email, password, level) VALUES ('$nama','$email','$password','$level')";
    $result = mysqli_query($conn, $mysqli);

    if($result){
        echo "
        <script>
        alert('sukses datar, silahkan login');
        window.location.href = './login.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('gagal mendaftar, silahkan coba lagi');
        window.location.href = './daftar.php';
        </script>
        ";
    }
}
?>