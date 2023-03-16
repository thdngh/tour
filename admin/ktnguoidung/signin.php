<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}
input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=reset]:hover {
  background-color: red;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #ff4d4d;
  padding: 10px;
  align: center;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  background-image: url('../images/gs.jpg');
  content: "";
  display: table;
  clear: both;
  
  
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .column, input[type=reset] {
    width: 100%;
    margin-top: 0;
  }
}
.img{
  border-bottom-right-radius: 30px;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
  </div>
  <div class="row">
    <div class="column">
      <img src="../../images/gsinh.jpg" style="width:100%" class="img">
    </div>
	<p><?php if(isset($tb)) echo $tb; ?></p>
<h2 class="form-title" align="center">Đăng Kí</h2>
    <div class="column">
      <form method="POST" action="index.php?action=themkhachhang">
        <label for="fname">Họ Tên</label>
        <input type="text" id="name" name="txthoten" placeholder="Họ Tên..">
        <label for="lname">Email</label>
        <input type="text" id="email" name="txtemail" placeholder="Email..">
        <label for="lname">Số Điện Thoại</label>
        <input type="text" id="email" name="txtdienthoai" placeholder="Số Điện Thoại..">
        <label for="subject">Mật Khẩu</label>
		<input type="text" id="pass" name="txtmatkhau" placeholder="Mật Khẩu..">
        <label for="subject">Nhập Lại Mật Khẩu</label>
		<input type="text" id="re_pass" name="txtnlmatkhau" placeholder="Nhập Lại Mật Khẩu..">
        <input type="submit" value="Submit">
		<input type="reset" value="Reset">
    <br><br><br>
    <a href="../../index.php"><span class="glyphicon glyphicon-home"></span>Trang Chủ</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>
