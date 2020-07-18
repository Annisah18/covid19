<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' and password='$password'");
 
   
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/add.php");
    }
    else{
        header("location:add.php?pesan=gagal");
    }
?>