<?php include("../view/top.php"); ?>

<h3>Thêm tour</h3> 
<br>
<form method="post" enctype="multipart/form-data" action="index.php">
<input type="hidden" name="action" value="xulythem">
<div class="form-group">
	<label>Loại</label>
	<select class="form-control" name="optdanhmuc">
	<?php
	foreach($danhmuc as $dm):
	?>
		<option value="<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></option>
	<?php
	endforeach;
	?>
	</select>
</div>
<div class="form-group">
	<label>Hình ảnh</label>
	<input class="form-control" type="file" name="filehinhanh">
	<label>Hình ảnh 2</label>
	<input class="form-control" type="file" name="filehinhanh2">
	<label>Hình ảnh 3</label>
	<input class="form-control" type="file" name="filehinhanh3">
</div>
<div class="form-group">
	<label>Tên tour</label>
	<input class="form-control" type="text" name="txttentour">
</div>

<div class="form-group">
	<label>Giá</label>
	<input class="form-control" type="number" name="txtgia" value="0">
</div>

<div class="form-group">
	<label>Lịch trình</label>
	<textarea class="form-control" name="txtlichtrinh"></textarea>
</div>

<div class="form-group">
	<input type="submit" value="Lưu" class="btn btn-success">
	<input type="reset" value="Hủy" class="btn btn-warning">
</div>
</form>

<?php include("../view/bottom.php"); ?>
