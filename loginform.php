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
body{
  margin:0;
  font-family: Consolas;
}

#myVideo {
  opacity:0.9;
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

h1{
	margin:10px;
	text-align:center;
}

h2{
	padding:10px;
	color:white;
	font-weight:bold;
}

.container {
  position: fixed;
  top:15%;
  right: 36%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: rgba(255,255,255,0.8);
  border-radius: 5px;
}
.content {
  position: fixed;
  bottom: 0;
  background: transparent;
  width: 100%;
  padding:5px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #fff;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


button, html input[type=button], input[type=submit]{
	background-color: #ADC178;
	color: white;
	font-weight:bold;
	width:44%;
	margin:5px;
}
button, html input[type=button], input[type=reset]{
	background-color: #BC4749;
	color:white;
	font-weight:bold;
	width:44%;
	margin:5px;
}


.input-icon {
    position: relative;
 }

.input-icon input {
   padding-right: 4rem;
}

.input-icon span {
    position: absolute;
    top: 50%;
    right: 5%;
    transform: translateY(-50%);
    color: #BC4749;
    cursor: pointer;
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
  <source src="images/bg/dalat.mp4" type="video/mp4">
</video>

<div class="content">
  <a href="admin/index.php" style="color:#678D58;font-size:15px;"><span class="glyphicon glyphicon-user"></span></a>
</div>

<div class="container">
  <form method="post" action="index.php">
  <fieldset>
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
		<input class="form-control"  type="text" name="txtemail" placeholder="Nhập Email" required>

    <label for="psw"><b>Password</b></label>	
	
	<div class="input-icon">
		<input id="myInput" class="form-control"  type="password" name="txtmatkhau" placeholder="Nhập password" required>                            
		<span class="glyphicon glyphicon-eye-open" onclick="myFunction()" ></span>
	</div>
	
	<div align="center">
		<input type="hidden" name="action" value="xldangnhap" >
		<input class="btn" type="submit" value="Đăng nhập" align="center">
		<input class="btn" type="reset" value="Reset" align="center">
	</div>
	<hr style="margin:15px 0 10px 0;">
	<div align="center" >
		<a style="font-size:12x;font-weight:bold;color:black;" href="index.php" >Trở về trang chủ</a>
	</div>
	
  </fieldset>
</form>
</div>

<script type="text/javascript">
var au = document.getElementById("audi");
function setVolume() { 
  au.volume = 0.3;
} 

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
