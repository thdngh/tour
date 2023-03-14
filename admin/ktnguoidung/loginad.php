<!DOCTYPE html>
<head>
<title>CREAM COSMETIC - Chuyên sỉ mỹ phẩm</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="bg-admin"  >
  <form  method="post" action="index.php" class="container" style ="right:15%; margin:1%;" >
  <?php if (isset($tb) && $tb != ""){ ?>
	<div class="alert alert-warning alert-dismissible fade in text-center">
		<?php echo "<p>$tb</p>"; ?>
	</div>
	<?php } ?>
    <h1>ĐĂNG NHẬP</h1>
	<fieldset>
    <label for="email"><b>Email</b></label>
    <input class="form-control"  type="text" name="txtemail" placeholder="Tên" required><br>
    <label for="psw"><b>Password</b></label>
    <input class="form-control"  type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>
	<input type="hidden" name="action" value="xldangnhap" >
	<input class="btn btn-primary"   type="submit" value="Đăng nhập">
	<br><br>
	<input class="btn btn-warning"   type="reset" value="Làm lại">
	<a href="../../index.php"><span></span><i class="fa fa-home"></i>Trang Chủ</a></li>
  </form>
</div>
</body>
</html>