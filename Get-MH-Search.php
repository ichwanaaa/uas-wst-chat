<?php

    // Call file in line
    include 'Database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();

    // Variabel GET URL
     $nama=$_GET['nama_chat'];

    // Process GET query
    $rows=mysqli_query($con,"select * from test where nama_chat like '%$nama%'");
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
          echo'<li class="clearfix">
                        <img src="'.$mhs[$i]->url.'" alt="avatar">
                        <div class="about">
                            <div class="name">'.$mhs[$i]->nama_chat.'</div>
                            <div class="status"> 

                            <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>';

      }


?>