<?php include("view/top.php"); ?>
<br><br><br>
<div class="container">    
  <div class="row"> 
    <h3>Vui lòng nhập đầy đủ thông tin</h3>
	<div class="col-sm-6">
	<h4>Thông tin khách hàng</h4>
	<?php 
	if(isset($_SESSION["khachhang"])){
	?>
	<form method="post">
		<input type="hidden" name="txtid" value="<?php echo $_SESSION["khachhang"]["id"]; ?>">
		<input type="hidden" name="action" value="luudonhang">
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="txtemail" id="txtemail" value="<?php echo $_SESSION["khachhang"]["email"]; ?>" readonly>
		</div>
		<div class="form-group">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" id="txthoten" value="<?php echo $_SESSION["khachhang"]["hoten"]; ?>" readonly>
		</div>
		<div class="form-group">
			<label>Số điện thoại</label>
			<input type="number" class="form-control" name="txtdienthoai" id="txtdienthoai" value="<?php echo $_SESSION["khachhang"]["sodienthoai"] ?>" readonly>
		</div>
		<div class="form-group">
			<label>Địa chỉ giao hàng</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php
	}
	else{	
		?>
		<form method="post">
			<input type="hidden" name="action" value="luudonhang">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="txtemail">
			</div>
			<div class="form-group">
				<label>Họ tên</label>
				<input type="text" class="form-control" name="txthoten">
			</div>
			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="number" class="form-control" name="txtdienthoai">
			</div>
			<div class="form-group">
				<label>Địa chỉ</label>
				<textarea class="form-control" name="txtdiachi"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Hoàn tất Đặt Tour" class="btn btn-primary">
			</div>
		
		<?php	
		}
		?>
	</div>
	<div class="col-sm-6">
	<h4>Tour đã chọn</h4>
		<table class="table table-bordered" style="background-color: white;">
		<tr class="info">
		<th>Tên Tour</th>
		<th>Hình ảnh</th>
		<th>Giá Tour</th>
		<th>Số lượng khách</th>
		<th>Thành tiền</th>
		<th> Xóa </th>
		</tr>
		
		<tr>
		<td><?php  echo $giohang["tentour"]; ?></td>
		<td style="font-size:25px;" value="<?php echo $giohang ["hinhanh"]; ?>">
      	<img src=" <?php echo $giohang["hinhanh"]; ?>" width="200px" class="img-thumbnail"></td>
		<td><?php echo number_format($giohang["gia"]) . "đ"; ?><input type = "hidden" class="form-control" id="tien" name="txttien"  value ="<?php echo $giohang["gia"] ; ?>" ></td>
		<td><input type="number" class="form-control" id="songuoi" name="txtsonguoi" value="1" onchange="TinhTien()"></td>
		<td id = "thanhtien" onload = "TinhTien()"> </td>
		<td><a class="btn btn-danger" href="?action=xoadon&id="><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		<tr>
		</tr>
		</table>
		</form>
	</div>
  </div>
</div>
<br><br>
<script>
	document.getElementById("songuoi").onload = TinhTien();
function TinhTien(){
	var x = document.getElementById("songuoi").value;
	var tien = document.getElementById("tien").value;
	if(x >0){
		tien = tien *x ;
		$('#thanhtien').html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(tien));
	}else{
		$('#thanhtien').html('0 đ');
	}
	
}
</script>
<?php include("view/carousel.php"); ?>

<?php include("view/bottom.php"); ?>