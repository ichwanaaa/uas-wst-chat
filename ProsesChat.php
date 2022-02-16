<?php

    include 'Database.php';

    $db = new Database();
    $con=$db->Connect();

    $id = $_POST['id_chat'];
  	$nama = $_POST['nama_chat'];
	$text = $_POST['text_chat'];
	$waktu = $_POST['tgl_chat'];

	mysqli_query($con,"insert into chat values('".$id."','".$nama."','".$text."','".$waktu."')");



?>
