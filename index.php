<!DOCTYPE html>
<html>
<head>
    <title>PPDB | SMAN BATU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <center><h3>PPDB Tahun Ajaran 2018/2019</h3>
        <h1>SMAN BATU</h1></center>
    </header>

    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <br><center><a class="bg-daftar" href="form-daftar.php" >DAFTAR</a></center>
            <br><center><br><br><a class="bg-pendaftar" href="list-siswa.php">PENDAFTAR</a></center>
        </ul>
    </nav>

    </body>
</html>