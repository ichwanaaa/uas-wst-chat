<?php

    include 'Database.php';

    $db = new Database();
    $con=$db->Connect();

    $id = $_GET['id_chat'];

	mysqli_query($con,"delete from chat where id_chat='$id'");

        echo"berhasil";
?>
