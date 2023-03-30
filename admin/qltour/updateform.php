<?php include("../view/top.php"); ?>
<div>
<h3>Cập nhật mặt hàng</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="hidden" name="action" value="xulysua">
<input type="hidden" name="txtid" value="<?php echo $t["id"]; ?>">
<div class="form-group">    
	<label>Loại</label>    
	<select class="form-control" name="optdanhmuc">
		<?php foreach ($danhmuc as $dm ) { ?>
			<option value="<?php echo $dm["id"]; ?>" <?php if($dm["id"] == $t["danhmuc_id"]) echo "selected"; ?>><?php echo $dm["tendanhmuc"]; ?></option>
		<?php } ?>
	</select>
</div>
<div class="form-group">    
	<label>Tên tour</label>    
	<input class="form-control" type="text" name="txttenhang" required value="<?php echo $t["tentour"]; ?>">
</div> 
<div class="form-group">    
	<label>lịch trình</label>    
	<textarea class="form-control" name="txtmota" required><?php echo $t["lichtrinh"]; ?></textarea>
</div> 
<div class="form-group">    
	<label>Giá</label>    
	<input class="form-control" type="number" name="txtgiagoc" value="<?php echo $t["gia"]; ?>" required>
</div> 

<div class="form-group">    
	<label>Lượt xem</label>    
	<input class="form-control" type="number" name="txtluotxem" value="<?php echo $t["luotxem"]; ?>" required>
</div> 
<div class="form-group">    
	<label>Lượt đặt</label>    
	<input class="form-control" type="number" name="txtluotmua" value="<?php echo $t["luotdat"]; ?>" required>
</div> 
<div class="row"> 
	<div id="hinh" class="col-sm-3">
		<label>Hình ảnh 1</label><br>
		<input type="hidden" name="txthinhcu" value="<?php echo $t["hinhanh"]; ?>">
		<img src="../../<?php echo $t["hinhanh"]; ?>" width="50"><br>
		<input type="checkbox" id="chkdoianh" name="chkdoianh" value="1"> Đổi ảnh<br>
	</div>  
	<div id="hinh" class="col-sm-3">
		<label>Hình ảnh 2</label><br>
		<input type="hidden" name="txthinhcu" value="<?php echo $t["hinhanh"]; ?>">
		<img src="../../<?php echo $t["hinhanh2"]; ?>" width="50"><br>
		<input type="checkbox" id="chkdoianh" name="chkdoianh" value="1"> Đổi ảnh<br>
	</div>  
	<div id="hinh" class="col-sm-3">
		<label>Hình ảnh 3</label><br>
		<input type="hidden" name="txthinhcu" value="<?php echo $t["hinhanh"]; ?>">
		<img src="../../<?php echo $t["hinhanh3"]; ?>" width="50"><br>
		<input type="checkbox" id="chkdoianh" name="chkdoianh" value="1"> Đổi ảnh<br>
	</div>  
</div>  
<div id="file" class="form-group">  
	<input type="file" class="form-control" name="filehinhanh">
</div>
<br>
<div class="form-group">
	<input class="btn btn-primary"  type="submit" value="Lưu">
	<input class="btn btn-warning"  type="reset" value="Hủy">
</div>
</form>
</div>
<!-- JQuery: hiển thị/tắt phần tử chọn file hình ảnh -->
<script>
$(document).ready(function(){
    $("#file").hide();
    $("#chkdoianh").click(function(){        
        $("#file").toggle(500);
    });
});
</script>

<?php include("../view/bottom.php"); ?>