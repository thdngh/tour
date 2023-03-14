<?php include("view/carousel.php"); ?>
<?php include("view/top.php"); ?>
<style>
  .panel{
	height:420px;
}

.panel.panel-gr{
	border:none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.panel-gr>.panel-heading {
    background-color: none;
	height:70px;
	padding-top:15px;
}
.panel-gr>.panel-body {
	height:293px;
}

.panel-gr>.panel-footer{
	background-color:transparent;
	border:none;
	padding:5px;
}

.btn-d{
	font-weight:bold;
	background-color:#31493C;
	color:white;	
}
.btn-m{
	font-weight:bold;
	background-color:#690500;
	color:white;	
}
.btn-d:hover,.btn-m:hover{
	font-weight:bold;
	background-color:#f5e2c8;
	color:#17255a;	
}
.btn-sm {
	height:25px;
	margin-top:-8px;
	margin-right:5px;
}

.btn-sm span{
	padding-bottom:5px;
}

</style>
<br>
<div class="container">    
<div class="row">

<h3 align="center">Các tour <?php echo $tendm; ?></h3>
<?php
if($mathang != null){
foreach($mathang as $mh):  
?><br>
<div class="col-sm-3">
  <div class="panel panel-gr text-center" >
    <div class="panel-heading"><a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>" style="color:#17255a; font-weight:bold;">
    	<?php echo $mh["tentour"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
    	<img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $mh["tentour"]; ?>"></a>
    	<div style="font-weight:bold;padding-top:5px;">Giá bán: <span  class="text-danger"><?php echo number_format($mh["gia"]); ?>đ</span>  </div>
    </div> 
	<div class="panel-footer">
        <a class="btn btn-d" href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>" style="font-weight:bold; border-radius:50px;">Chi tiết</a> 
        <a class="btn btn-m" href="?action=chovaogio&id=<?php echo $mh["id"]; ?>&soluong=1"  style="font-weight:bold; border-radius:50px;">Chọn mua</a>  
    </div>  
     
  </div>
</div>
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
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>