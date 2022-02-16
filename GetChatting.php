<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
  session_start();
    // Call file in line
    include 'Database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();

    // Variabel GET URL
    $nama=(isset($_GET['nama_chat']));
    $text=(isset($_GET['text_chat']));

    // Process GET query
    $rows=mysqli_query($con,"select * from chat join test on test.nama_chat = chat.nama_chat");
    $data=array();
    $no=0;
    foreach($rows as $row)
    {
        $data[]=$row;
        $no=$no+1;
    }

    // Process encription data
    $dataGet=json_encode($data);

    // Process description data
    $mhs=json_decode($dataGet);

    // View with looping use index array
    for ($i = 0; $i < $no; $i++) {

  

    if($_SESSION['nis']){
            $aktip = "text-right";
        }else{
            $aktip = "text-left";
        }

    echo"<br>";
    echo'<div class="message-data $aktip"><img src="'.$mhs[$i]->url.'" alt="avatar"><span class="message-data-time">'.$mhs[$i]->nama_chat.', '.$mhs[$i]->tgl_chat.'</span></div>';
    echo '<div class="message my-message">'.$mhs[$i]->text_chat.'</div>';
    echo"<br>";
      }

?>