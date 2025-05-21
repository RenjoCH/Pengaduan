<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:index.php?pesan=andasudahlogin");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body, html {
        height: 100%;
        margin: 0;
    }
    body::before {
        content: "";
        background: url('images/bg-bq.jpg') no-repeat center center fixed;
        background-size: cover;
        position: absolute;
        top: 0; left: 0;
        height: 100%; width: 100%;
        z-index: -2;
    }
    body::after {
        content: "";
        position: absolute;
        top: 0; left: 0;
        height: 100%; width: 100%;
        backdrop-filter: blur(8px);
        background-color: rgba(0, 0, 0, 0.3);
        z-index: -1;
    }
    .container {
        margin-top: 80px;
    }
    .card {
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        border-radius: 16px;
    }
    .form-control, .btn {
        border-radius: 12px;
    }
    .nav-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-bottom: 30px;
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4 text-white text-shadow">Layanan Pengaduan Bina Qurani</h2>

  <div class="nav-buttons">
        <a href="login.php" class="btn btn-light btn-lg">Login</a>
        <a href="daftar.php" class="btn btn-success btn-lg">Daftar</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card p-4">
                <h4 class="text-center mb-4">Formulir Pendaftaran</h4>

                <?php
                if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Pendaftaran gagal. Email mungkin sudah digunakan.</div>";
                }
                ?>

                <form action="proses_daftar.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-success">Daftar</button>
                        <button type="reset" class="btn btn-outline-danger">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
