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
.img:hover {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 0.5s;

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
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
     <h3>Tất cả sản phẩm </h3>
    <?php
    foreach($tttour as $mt):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-a text-center">
        <div class="panel-heading">
          <a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>" style="color:white;font-weight:bold;" >
		  <?php echo $mt["tentour"]; ?></a>
        </div>
        <div class="panel-body">
			<a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>">
      <img src="<?php echo $mt["hinhanh"]; ?>" class="img" style="width:100%" alt="<?php echo $mt["tentour"]; ?>"></a><strong>Giá bán: <span  class="text-danger">
            <?php echo number_format($mt["gia"]); ?>đ</span> </strong>   
    </div>
        <div class="panel-footer">
        <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>"><i class="fa fa-bars" style=" font-size:15px; width:25%; height:40%;"></i>Chi tiết</a>
          <a class="btn btn-danger" href="?action=dattour&id=<?php echo $mt["id"]; ?>"><i class="fa fa-shopping-basket" style=" font-size:13px; width:25%; height:25%;"></i>Mua Hàng</a>
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