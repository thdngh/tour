<?php include("view/top.php"); ?>
<?php include("view/carousel.php"); ?>

<style>
	.panel-a{
	border:1px solid #F25F5C;
}
.panel-a>.panel-heading {
    color: #fff;
    background-color: #F25F5C;
    border-color: #F9DBBD;
	height:70px;
	
}
.panel-a>.panel-body {
	height:293px;
}
#myCarousel{margin-top:30px;}
.a{
	height: 50px;
  width: 50px;
  background-color: #555;
  border-radius: 50%;
}


body {
	font-family: Arial;
	background-color: #EB9486;
  width: 100%;
  height:100%;
}

	</style>
  <body>
<br><br>
<div class="container">  
  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
     <a name="sptatca"></a>
     <h3>Tất cả tour</h3>
    <?php
    foreach($mathang as $mh):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-a text-center">
        <div class="panel-heading">
          <a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>" style="color:white;font-weight:bold;" >
		  <?php echo $mh["tentour"]; ?></a>
        </div>
        <div class="panel-body">
			<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
      <img src="<?php echo $mh["hinhanh"]; ?>" class="img" style="width:100%" alt="<?php echo $mh["tentour"]; ?>"></a><strong>Giá bán: <span  class="text-danger">
            <?php echo number_format($mh["gia"]); ?>đ</span> </strong>   
    </div>
        <div class="panel-footer">
        <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>"><i class="fa fa-bars" style=" font-size:15px; width:25%; height:40%;"></i> Chi tiết</a>
          <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $mh["id"]; ?>&soluong=1"><i class="fa fa-shopping-basket" style=" font-size:13px; width:25%; height:25%;"></i> Đặt tour</a>
        </div>
      </div>
    </div>    
    <?php endforeach; ?>
  </div>

 <div class="row" align="center" class="circle"> 
 <ul class='pagination'>
	<li><a href="?trang=1">
	<span class="glyphicon glyphicon-step-backward"></span></a></li>
	<?php
	if ($tranghh>1&&$tongsotrang>1)
	?>
	<li><a href='?trang=<?php echo $tranghh-1; ?>'>
	<span class="glyphicon glyphicon-chevron-left"></span></a></li>
	
	<?php
	for($i=1; $i<=$tongsotrang; $i++){
		if($i==$tranghh){
	?>
		<li class="active"><span><?php echo $i;?></span></li>
	<?php
		}
	else{
	?>
		<li><a href="?trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	<?php	
		}
	}
	if($tranghh<$tongsotrang&&$tongsotrang>1)
		?>
	<li><a href='?trang=<?php echo $tranghh+1; ?>'>
		<span class="glyphicon glyphicon-chevron-right"></span></a></li>
	<li><a href='?trang=<?php echo $tongsotrang; ?>'>
		<span class="glyphicon glyphicon-step-forward"></span></a></li>
	
</ul>
</div>
</body>
  <?php include("topview.php"); ?>
  

</div>
<?php include("view/bottom.php"); ?>