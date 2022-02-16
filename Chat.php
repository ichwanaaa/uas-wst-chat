<?php

  session_start();

  if(!$_SESSION['nis']){
    header("location: login.php");
  }

?>


<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br>

<div class="container">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat-app">
            <div id="plist" class="people-list">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search..." onkeyup="showMhs(this.value)">
                </div>
                <div ></div>
                <ul class="list-unstyled chat-list mt-2 mb-0 data-user" id="show">

                	
                   
                <!--     <li class="clearfix active">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                        <div class="about">
                            <div class="name">Aiden Chavez</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                        <div class="about">
                            <div class="name">Mike Thomas</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>                                    
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                        <div class="about">
                            <div class="name">Christian Kelly</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                        <div class="about">
                            <div class="name">Monica Ward</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                        <div class="about">
                            <div class="name">Dean Henry</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                        </div>
                    </li> -->
                </ul>
            </div>

            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0">Teknik Informatika A</h6>
                                <small><?php echo $_SESSION['nama_chat'] ?> : <i class="fa fa-circle online"></i>online</small>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <li class="clearfix data-chat tampildata" >
                           
                        </li>
                    </ul>
                    
                </div>


                <form method="post" class="form-user myForm" >
                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                        <span class="input-group-text tombol-simpan"><i class="fa fa-send"></i></span>                        </div>
                        
                        <input type="text" id="input-text" name="text_chat" class="form-control" autocomplete="off" required  placeholder="Enter text here...">
                       
                         
                        <input hidden="" name="nama_chat" value="<?php echo $_SESSION['nama_chat'] ?>">
                        <input hidden="" name="tgl_chat" 
                        	   value="
                        	   <?php
								date_default_timezone_set("asia/jakarta");
								echo date('H:i:s');
								?>"
							/>
                                               
                    </div>
                </div>
                    </form> 
            </div>
            
        
        </div>
    </div>
</div>
<a href="Logout.php">LOGOUT</a>
</div>

 <script>
    function showMhs(str) {
        if (str == "") {
            document.getElementById("show").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("show").innerHTML = this.responseText;
            }
            };
            
            // Open web service and send request
            xmlhttp.open("GET","Get-MH-Search.php?nama="+str,true);
            xmlhttp.send();
        }
    }
</script>


<script>
  $(document).ready(function(){
        app = {
            show: function(){
                $(".data-user").load("Get-MH-List.php",{type: 'view'}, function(response){
                    $('.data-user').html(response);
                });
            }
        }
        app.show()
 
          }); 
 
</script>
<script>
  $(document).ready(function(){
        app = {
            show: function(){
                $(".data-chat").load("GetChatting.php",{type: 'view'}, function(response){
                    $('.data-chat').html(response);
                });
            }
        }
        app.show()
 
          }); 
 
</script>
<script>
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: "ProsesChat.php",
				data: data,
				success: function() {
					$('.tampildata').load("GetChatting.php");
					$(".myform")[0].reset();

				}
			});
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(".tombol-update").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'PUT',
				url: "PutAjax.php?id_chat="+ $("#input-id").val() +"&text_chat="+ $("#input-text").val(),
				data: values,
				success: function() {
					$('.tampildata').load("GetChatting.php");
					$(".myform")[0].reset();
                    alert("sukses");

				}
			});
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(".tombol-hapus").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'PUT',
				url: "deleteAjax.php?id_chat="+ $("#input-id").val(),
				data: values,
				success: function() {
					$('.tampildata').load("GetChatting.php");
					$(".myform")[0].reset();
                    alert("sukses");

				}
			});
		});
	});
</script>
	<!-- <script type="text/javascript">
		function myFunction() {
  document.getElementById("myForm").reset();
}
	</script> -->
</body>
</html>