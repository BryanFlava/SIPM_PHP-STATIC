<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"SELECT * from jadwal_kelas1 where kode_kelas = '".$_GET['kode']."'");
$data=mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Update Data</title>
</head>
<body>
<form action="" method="post">
<div class="contact-form">
        <h1>Ubah Data </h1>
        <div class="txtb">
            <label>Nama Dosen</label>
            <input type="text" name="nama_dsn" value="<?php echo $data['nama_dsn']; ?>">
        </div>

        <div class="txtb">
            <label>Kelas </label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>">
        </div>

        <div class="txtb">
            <label>Mata Kuliah </label>
            <input type="text" name="matkul" value="<?php echo $data['matkul']; ?>">
        </div>

        <div class="txtb">
            <label>Jam Matakuliah</label>
            <input type="text" name="jam" value="<?php echo $data['jam']; ?>">
        </div>

        <input type="hidden" name="kode_kelas" value="<?php echo $data['kode_kelas']; ?>">
        <input type="submit" class="btn" name="proses" value="Ubah">
</form>

</html>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
$tes = mysqli_query($koneksi, "UPDATE jadwal_kelas1 SET
nama_dsn = '".$_POST['nama_dsn']."',
kelas = '".$_POST['kelas']."' ,
matkul = '".$_POST['matkul']."',
jam = '".$_POST['jam']."'
WHERE kode_kelas = '".$_POST['kode_kelas']."'");
header("Location: tampilan-data.php");
}

?>