<?php include("view/top.php"); ?>

<style>
h3{font-weight:bold;}
body{font-family: consolas;}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.panel{
	height:420px;
	width:270px;
}

.panel-cus{
	border:1px solid none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
}

.panel-cus>.panel-heading {
    color: #fff;
    background-color: none;
    border-color: none;
	height:110px;
}
.panel-cus>.panel-heading a:hover {
	color:#690500;
	text-decoration:none;
}
.panel-cus>.panel-body {
	min-height:240px;
}

.panel-footer{
	background-color:transparent;
	border:none;
	padding:5px;
}

img.center:hover, img.img-responsive:hover{
	opacity: 0.7;
	transform: scale(1.1);
	transition: .3s ease;
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

.btn{
	border-radius:100px;margin:0 5px;
}

.btn-d{
	font-weight:bold;
	background-color:white;
	border:solid 2px #1976D2;
	color:#1976D2;	
}
.btn-m{
	font-weight:bold;
	background-color:#fff;
	border:solid 2px #D7263D;
	color:#D7263D;	
}
.btn-d:hover{
	font-weight:bold;
	background-color:#1976D2;
	color:#fff;	
}
.btn-m:hover{
	font-weight:bold;
	background-color:#D7263D;
	color:#fff;	
}

</style>
<br>
<br>

<?php include("view/carousel.php"); ?>
<br>
<div class="container">  
  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
     <a name="sptatca"></a>
     <h3 align='center'>Tất cả sản phẩm </h3>
	 <br>
    <?php
    foreach($tour as $tt):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-cus text-center">
        <div class="panel-heading text-center" style="padding-top:15px;">
          <a href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>" style="color:#17255a;font-weight:900;font-size:15px;" >
		  <?php echo $tt["tentour"]; ?></a>
        </div>
        <div class="panel-body center"style="height:200px;" >
			<a href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>">
			<img class="center" src="<?php echo $tt["hinhanh"]; ?>" class="img-responsive" style="width:230px; margin-bottom:10px; "  alt="<?php echo $tt["tentour"]; ?>"></a>
			<strong>Giá bán: <span class="text-danger"><?php echo number_format($tt["gia"]); ?>đ</span> </strong>   
    </div>
        <div class="panel-footer" >
         
            <a class="btn btn-d" href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>">Chi tiết</a>
          <a class="btn btn-m" href="?action=dattour&id=<?php echo $tt["id"]; ?>&soluong=1">Đặt tour</a>
        </div>
      </div>
    </div>    
    <?php endforeach; ?>
  </div>

<div class="row" align="center"> 
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
  
  <?php include("topview.php"); ?>
  

</div>

<?php include("view/bottom.php"); ?>