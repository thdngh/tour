<?php include("../view/top.php"); ?>

<h3>Quản lý tour</h3> 
<br>
<a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm tour</a>
<br> <br> 
<table class="table table-hover">
	<tr>
		<th>Hình ảnh</th>		
		<th>Tên tour</th>
		<th>Giá </th>
		<th>Lịch trình</th>
		<th>Lượt xem</th>
		<th>Lượt đặt</th>
		<th>Hình ảnh thêm</th>		
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php
	foreach($tour as $tt):
	?>
	<tr>
		<td><img src="../../<?php echo $tt["hinhanh"]; ?>" width="80" class="img-thumbnail"></td>
		<td><?php echo $tt["tentour"]; ?></td>
		<td><?php echo $tt["gia"]; ?></td>
		<td><?php echo $tt["lichtrinh"]; ?></td>
		<td><?php echo $tt["luotxem"]; ?></td>
		<td><?php echo $tt["luotdat"]; ?></td>
		<td><img src="../../<?php echo $tt["hinhanh2"]; ?>" width="80" class="img-thumbnail"><img src="../../<?php echo $tt["hinhanh3"]; ?>" width="80" class="img-thumbnail"></td>
		
		<td><a class="btn btn-warning" href="index.php?action=sua&id=<?php echo $tt["id"]; ?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
		<td><a class="btn btn-danger" href="index.php?action=xoa&id=<?php echo $tt["id"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
	<?php
	endforeach;
	?>
</table>

<?php include("../view/bottom.php"); ?>