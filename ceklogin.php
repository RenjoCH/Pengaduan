<?php
session_start(); // mengaktifkan sessuion

include 'koneksi.php'; // menghubungkan php dengan koneksi database

// menangkap data dari from login
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi username dan password
$login = mysqli_query($conn, "SELECT * FROM user where email='$email' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan dalam database
if($cek > 0){

    $data = mysqli_fetch_array($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){
		$_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['id'] = $data['id'];
        $_SESSION['level'] = "admin";
        // redirect ke halaman admin
        echo "
        <script>
        alert('Sukses login sebagai admin');
        window.location.href = './admin/user.php';
        </script>
        ";

    } else if($data['level']=="member"){
		$_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['id'] = $data['id'];
        $_SESSION['level'] = "member";
        // redirect ke halaman member
        echo "
        <script>
        alert('Sukses login sebagai member');
        window.location.href = './member/mahasiswa.php';
        </script>
        ";
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}

?>