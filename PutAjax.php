<?php

    include 'Database.php';

    $db = new Database();
    $con=$db->Connect();

    $id = $_GET['id_chat'];
  	$text = $_GET['text_chat'];

	mysqli_query($con,"update chat set id_chat='$id', text_chat='$text ' WHERE id_chat='$id'");
      echo"berhasil";
?>