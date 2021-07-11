<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <div class="contact-form">
                <h1>Tambah Data </h1>
                <div class="txtb">
                    <label>Hari </label>
                    <input type="text" name="hari" value="">
                </div>
                <div class="txtb">
                    <label>Mata Kuliah </label>
                    <input type="text" name="matkul" value="">
                </div>

                <div class="txtb">
                    <label>Kode Kelas </label>
                    <input type="text" name="kode_kelas" value="">
                </div>

                <div class="txtb">
                    <label>Nama Dosen </label>
                    <input type="text" name="nama_dsn" value="">
                </div>

                <div class="txtb">
                    <label>Jam Matakuliah</label>
                    <input type="text" name="jam" value="">
                </div>

                <div class="txtb">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="">
                </div>

                <div class="txtb">
                    <label>Prodi</label>
                    <input type="text" name="prodi" value="">
                </div>
                <input type="submit" class="btn" name="proses" value="Simpan">
        </form>
        <?php
        include "koneksi.php";

        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "INSERT into jadwal_kelas1 set  
hari = '$_POST[hari]',
matkul = '$_POST[matkul]',
kode_kelas = '$_POST[kode_kelas]',
nama_dsn = '$_POST[nama_dsn]',
jam = '$_POST[jam]',
prodi = '$_POST[prodi]',
kelas = '$_POST[kelas]'");

            echo "Data baru telah tersimpan";
            echo "<meta http-equiv=refresh content=2;URL='tampilan-data.php'>";
        }

        ?>
</body>

</html>