<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ="stylesheet" type="text/css" href="css/style.css">
	<title>Login | SMAN 2</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Daftar</h2>
		<form action=""method="POST">
            <input type="text" name="nama" placeholder="nama" class="input-control">
			<input type="text" name="user" placeholder="username" class="input-control">
			<input type="password" name="pass" placeholder="password" class="input-control">
            <input type="number" name="nohp" placeholder="nohp" class="input-control">
            <input type="email" name="email" placeholder="email" class="input-control">
            <input type="text" name="alamat" placeholder="alamat" class="input-control">
			<input type="submit" name="submit" value="login" class="btn">
		</form>
		<?php
                if(isset($_POST['submit'])){
                    session_start();
                    include 'db.php';
                    $user = mysqli_real_escape_string($conn, $_POST['user']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    $cek = mysqli_query($conn, "select * from tb_admin where username ='".$user."' AND password = '".MD5($pass)."'");
                    if(mysqli_num_rows($cek) > 0){
                    	$d = mysqli_fetch_object($cek);
                        $_SESSION['status_login'] = true;
                        $_SESSION['a_global'] = $d;
                        $_SESSION['id'] = $d->admin_id;
                    	echo '<script>window.location="dashboard.php"</script>';
                    }else{
                    	echo '<script>alert("Username atau Password anda salah")</script>';
                    }
        }
        ?>
	</div>
</body>
</html>