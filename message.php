<?php include("view/carousel.php"); ?>
<?php include("view/top.php"); ?>

<br><br>
<div class="container">  
  <div class="row"> 
    		<b><h3 style="color: blue;"> VIETRAVEL Cảm ơn quý khách!</h3></b>
			<br>
			<h4>Mã số tour: <b><?php echo $don_id; ?></b>
			<br>
			<br> trị giá <strong><?php echo number_format($tongtien) ?>đ</strong>
			<br>
			<b><br>Quý khách sẽ được liên hệ trong vòng 12h kể từ lúc đặt tour.</b>
  		</div>
  		<div class="row">
  			<div class="col">
						<h4><b>Thông tin tour du lịch</b></h4>
							<table class="table table-bordered" style="background-color: white">
							<tr class="info">
							<th>Tên Tour</th>
							<th>Hình ảnh</th>
							<th>Đơn giá</th>
							<th>Số lượng khách</th>
							<th>Thành tiền</th>
							</tr>
							
							<tr>
							<td><?php echo $giohang["tentour"]; ?></td>
							<td style="font-size:15px;" value="<?php echo $giohang ["hinhanh"]; ?>">
						<img src=" <?php echo $giohang["hinhanh"]; ?>" width="90px" class="img-thumbnail"></td>
							<td><?php echo number_format($giohang["gia"]) . "đ"; ?></td>
							<td><?php echo $soluong; ?></td>
							<td><?php echo number_format($thanhtien) . "đ"; ?></td>
							</tr>
							<tr>
							<td colspan="4"align="top"><b>Tổng tiền</b></td>
							<td><b><?php echo number_format($tongtien) ?>đ</b></td>
							</tr>
							</table>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("view/bottom.php"); ?>