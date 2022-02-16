<?php

    // Call file in line
    include 'Database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();

    // Variabel GET URL
     $nama=(isset($_GET['nama_chat']));

    // Process GET query
    $rows=mysqli_query($con,"select * from test");
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


  session_start();

  if($_SESSION['nama_chat'] == true){
        $cek='<i class="fa fa-circle ofline"></i> Member </div>';
  }else{
    $cek='<i class="fa fa-circle ofline"></i> ofline </div>';
}

    // View with looping use index array
    for ($i = 0; $i < $no; $i++) {

      echo'<li class="clearfix">
           <img src="'.$mhs[$i]->url.'" alt="avatar">
           <div class="about">
           <div class="name">'.$mhs[$i]->nama_chat.'</div>';                            
      echo'<div class="status"> '.$cek.'</div></li>';
                            
                        
                

      }
                   
?>

 
                       