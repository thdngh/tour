<?php include("view/carousel.php"); ?>
<?php include("view/top.php"); ?>

<br><br>
<div class="container">  
  <div class="row"> 
    		<h3>Cảm ơn quý khách!</h3>   
			<h4>Đơn hàng mã số <?php echo $donhang_id; ?> trị giá <strong><?php echo number_format($tongtien) ?>đ</strong> sẽ được giao đến quý khách trong thời gian sớm nhất.
  		</div>
  		<div class="row">
  			<div class="col">
						<h4>Các mặt hàng đã chọn</h4>
							<table class="table table-bordered" style="background-color: white">
							<tr class="info">
							<th>Sản phẩm</th>
							<th>Hình ảnh</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							</tr>
							<?php foreach($giohang as $mahang => $mh): ?>
							<tr>
							<td><?php echo $mh["tenhang"]; ?></td>
							<td style="font-size:15px;" value="<?php echo $mh ["hinhanh"]; ?>">
						<img src=" <?php echo $mh["hinhanh"]; ?>" width="90px" class="img-thumbnail"></td>
							<td><?php echo number_format($mh["giaban"]) . "đ"; ?></td>
							<td><?php echo $mh["soluong"]; ?></td>
							<td><?php echo number_format($mh["sotien"]) . "đ"; ?></td>
							</tr>
							<?php endforeach; ?>
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