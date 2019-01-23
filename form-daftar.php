<!DOCTYPE html>
<html>
<head>
    <title>PPDB | SMAN Batu</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<center>
<body>
    <header>
        <h3>Formulir Penerimaan Peserta Didik Baru</h3>
    </header>

    <div class="OP">
    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katholik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Khonghucu</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>
        </div>
    </form>

    </body>
</center>
</html>