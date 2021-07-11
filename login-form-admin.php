<?php
// fungsi untuk memulai session
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol submit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $user = $_POST['user'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($user == 'fahira' AND $password == '12345'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['user'] = $user;
        header('Location: dashboard-admin.php');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p style="color:red;"><i>Password atau Username yang kamu masukkan salah</i></p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">  
    <title>Login Admin</title>
</head>
<body>
<form class="box" method="POST" action="login-form-admin.php">
  <h1>Login Admin</h1>
  <input type="text" name="user" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <?php echo $form_error; ?>
  <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
