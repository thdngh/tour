<style>
.h3{
	font-weight:bold;
	font-size:20px;
}
.container{
	font-family:Consolas;
}

.l-card{
	height:300px;
	padding:10px;
	border-radius:5px;
}
.l-card.l-card-gr{
	border:none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.l-card-heading a{
	font-size:16px;
	font-weight:bold;
	color:#17255a; 
}

.l-card-heading a:hover{
	color:#0077B6;
	text-decoration:none;
}
.l-card-body {
	font-size:20px;
	font-weight:bold;
	color:#17255a; 
}
.l-card-footer a{
	color:#fff; 
}

img.center:hover, img.img-responsive:hover{
	opacity: 0.7;
	transition: .3s ease;
}

.col-md-4{
	padding:20px 20px 20px 30px;
}
.col-md-8{
	padding:20px 10px;
}
.btn-detail{
	font-weight:bold;
	background-color:#0E9594;
	color:white;	
}
.btn-book{
	font-weight:bold;
	background-color:#F2542D;
	color:white;	
}
.btn-detail:hover,.btn-book:hover{
	font-weight:bold;
	background-color:#f5e2c8;
	color:#17255a;	
}

.pagination>li>a, .pagination>li>span {
	margin:3px;
	border-radius:50%;
	background-color:#fff;
	color:#17255a;
	border:none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	font-weight:bold;

}
.pagination>li:first-child>a, .pagination>li:first-child>span {
	border-top-left-radius: 50%;
    border-bottom-left-radius: 50%;
}
.pagination>li:last-child>a, .pagination>li:last-child>span {
	border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
}

.pagination>li.active>span, .pagination>li.active>span:focus, .pagination>li.active>span:hover{
	background-color:#6BA4FF;
	color:#fff;
	font-weight:bold;
}


</style>
<?php include("view/top.php"); ?>
<br><br>
<?php include("view/carousel.php"); ?>

<br>

<div class="container">    
<div class="row">

<h3 align="center" >Các tour <?php echo $tendm; ?></h3>
<br>
<?php
if($tour != null){
foreach($tour as $tt):  
?>
	<div class="col" style="padding-bottom:20px;">
	  <div class="l-card l-card-gr text-justify" >
		  <div class="col-md-4">
		  <a href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>">
			<img src="<?php echo $tt["hinhanh"]; ?>" class="img-responsive" alt="<?php echo $tt["tentour"]; ?>"></a>
		  </div>
		  <div class="col-md-8">
		  <div class="col-md-9">
				<div class="l-card-heading"><a href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?> ">
					<?php echo $tt["tentour"]; ?></a>
				</div>
				 </div>
		  <div class="col-md-3 text-right" style="padding:120px 0 0 0;">
				<div class="l-card-body ">    	
					<div style="font-weight:bold;padding-top:5px;">Giá từ: <br><span class="text-danger"><?php echo number_format($tt["gia"]); ?>đ</span>  </div>
				</div>
				<br>
				<div class="l-card-footer">
					<a class="btn btn-detail" href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>" style="font-weight:bold; border-radius:50px;">Chi tiết</a> 
					<a class="btn btn-book" href="?action=dattour&id=<?php echo $tt["id"]; ?>&soluong=1"  style="font-weight:bold; border-radius:50px;">Đặt tour</a>  
				</div>  
		  </div>
		 
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

<?php include("view/bottom.php"); ?>