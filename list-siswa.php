<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>PPDB | SMAN Batu</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<center>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
<br>
<nav>
        <a class="ad" href="form-daftar.php">[+] TAMBAH BARU</a>
    </nav> 
    <br>
<table class="table1" border="1">
    </center>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
    <center>
    <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>
    </center>
    </body>
</html>