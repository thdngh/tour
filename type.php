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
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
	opacity:0.5;
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.container {
  position: fixed;
  align:center;
  width:100%;
}


h1{
	margin:10px;
	text-align:center;
}

h2{
	padding:10px;
	color:#17255a;
	font-weight:bold;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
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

<video autoplay muted loop id="myVideo">
  <source src="images/bg/ps3.mp4" type="video/mp4">
</video>

<div class="container">
	<div class="row" style="margin-left:26%;margin-top:12%;">
		<div class="column" align="center";>
			<a href="loginform.php"><img src="images/bg/c.png" style="border-radius:50%;" width="50%"></a>
			<p style="font-size:20px; font-weight:bold; margin:20px;">KHÁCH</p>
		</div>
		<div class="column" align="center";>
			<a href="admin/index.php"><img src="images/bg/q.jpg" style="border-radius:50%;" width="50%"></a>
			<p style="font-size:20px; font-weight:bold; margin:20px;">QUẢN TRỊ</p>
		</div>
	</div>
</div>


</body>
</html>
