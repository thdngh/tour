<!DOCTYPE html>
<html>
<head>  

<title>Vietravel - Đăng nhập</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="images/vtv.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
body, html {
  height: 100%;
  font-family: Consolas;
}

h1{
	margin:10px;
	text-align:center;
}

h2{
	padding:5px;
	margin:0;
	font-weight:bold;
}

* {
  box-sizing: border-box;
}
#myVideo {
  opacity:0.8;
  position: fixed;
  top:-50px;
  left:-80px;
  width: 115%; 
  height:115%;
}

/* Add styles to the form container */
.container {
  position: absolute;
  top:2%;
  right: 58%;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: rgba(255,255,255,0.8);
  border-radius: 5px;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px;
  border: none;
  background: #fff;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
button, html input[type=button], input[type=submit]{
	background-color: #749E76;
	color: white;
	font-weight:bold;
	width:30%;
	height:50px;
	margin:5px;
}
button, html input[type=button], input[type=reset]{
	background-color: #303855;
	color:white;
	font-weight:bold;
	width:30%;
	height:50px;
	margin:5px;
}

.col-6 {
  float: left;
  width: 45%;
  margin:5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<?php if (isset($tb) && $tb != ""){ ?>
	<div class="alert alert-warning alert-dismissible fade in text-center">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo "<p>$tb</p>"; ?>
	</div>
	<?php } ?>
	
<video autoplay muted loop id="myVideo">
  <source src="images/bg/saigon.mp4" type="video/mp4">
</video>

<!--<marquee direction="left" onmouseover="stop()" onmouseout="start()" truespeed="40" scrollamount="10">
	<h2>Chư dzị ngày mới dui dẻ nho ~ Chư dzị ngày mới dui dẻ nho ~ Chư dzị ngày mới dui dẻ nho </h2>
</marquee>-->
<div class="container">
  <div style="text-align:center">
  </div>
  <div class="row" style="margin:10px;">
	<p><?php if(isset($tb)) echo $tb; ?></p>
	
	<a href="index.php" style="color:#678D58;font-size:20px;"><span class="glyphicon glyphicon-arrow-left"></span></a>
	<h2 class="form-title" align="center">Đăng Kí</h2>
    <div class="column">
      <form method="POST" action="index.php?action=themkhachhang">
        <label for="fname">Họ Tên</label>
        <input type="text" id="name" name="txthoten" placeholder="Nhập họ Tên..">
		<div class="row" >
			<div class="col-6" style="margin:5px 0 5px 15px">
				<label for="lname">Email</label>
				<input type="text" id="email" name="txtemail" placeholder="Nhập email.." >			
			</div>
			<div class="col-6" style="margin:5px 0 5px 15px">
				<label for="lname">Số Điện Thoại</label>
				<input type="text" id="sdt" name="txtdienthoai" placeholder="Nhập số điện thoại.." >
			</div>
		</div>
        <label for="subject">Mật Khẩu</label>
		<input type="text" id="pass" name="txtmatkhau" placeholder="Mật Khẩu..">
        <label for="subject">Nhập Lại Mật Khẩu</label>
		<input type="text" id="re_pass" name="txtnlmatkhau" placeholder="Nhập Lại Mật Khẩu..">
        <br>
        <br>
		<div align="center">
			<input class="btn" type="submit" value="Đăng ký" align="center">
			<input class="btn" type="reset" value="Reset" align="center">
		</div>
      </form>
    </div>
  </div>
</div>



</body>
</html>
