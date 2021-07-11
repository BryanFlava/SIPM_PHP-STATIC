<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styleloading.css">
</head>
<body>
    <div class="loading-screen">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</body>
</html>

<?php
echo "<script>alert('TERIMA KASIH SILAHKAN LOGOUT');</script>";
echo "<meta http-equiv=refresh content=1;URL='landing-page.php'>";
?>
<!-- menampilkan isi untuk logout -->
<pre>
<?php
session_start();
session_destroy();
?>
</pre>