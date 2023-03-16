<?php include("view/carousel.php"); ?>
<?php include("view/top.php"); ?>
<style>
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
</style>
<br><br>
<div class="container">    
<div class="row">
<h3>Các sản phẩm <?php echo $tendm; ?></h3>
<?php
if($tttour != null){
foreach($tttour as $mt):  
?>
<div class="col-sm-3">
  <div class="panel panel-info text-center">
    <div class="panel-heading"><a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>">
    	<?php echo $mt["tentour"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>">
    	<img src="<?php echo $mt["hinhanh"]; ?>" class="img" style="width:100%" alt="<?php echo $mt["tentour"]; ?>"></a>
    	<div>Giá: <span  class="text-danger"><?php echo number_format($mt["gia"]); ?>đ</span>  </div>
    </div> 
	<div class="panel-footer">
        <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>"><i class="fa fa-bars"></i>Chi tiết</a> 
      <a class="btn btn-danger" href="?action=dattour&id=<?php echo $mt["id"]; ?>"><i class="fa fa-shopping-basket"></i>Chọn mua</a>  
    </div>  
     
  </div>
</div>
</divsss>
<?php 
endforeach; 
}
else{
    echo "<p>Vui lòng xem danh mục khác...</p>";
}
?>
</div>
<?php include("topview.php"); ?>
</div>
<?php include("view/bottom.php"); ?>