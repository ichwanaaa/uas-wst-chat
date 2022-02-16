<?php 
// mengaktifkan session php
session_start();

 // Call file in line
    include 'Database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();


// menangkap data yang dikirim dari form
$username = $_POST['nis'];
$password = $_POST['nis'];

$nama = $_POST['nama'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from test where nis='$username' and nis='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_array($data);

if($cek > 0){

	$_SESSION['nis'] = $username;
	$_SESSION['nama_chat'] = $row['nama_chat'];
	$_SESSION['url'] = $row['url'];
	$_SESSION['status'] = "login";
	header("location:Chat.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>