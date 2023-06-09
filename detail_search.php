<?php include("view/top.php"); ?>
<style>
div{font-family:"consolas";}

.tour-img,.img-add{
	width:100%;
}
img.tour-img{
	opacity: 0.7;
	transition: .3s ease;
}

img.img-responsive{
	scale:100%;
}
img.img-add{
	margin:10px 0;
}
.panel-i{
	height:360px;
	width:260px;
	border:1px solid none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
}

.panel-i>.panel-heading {
    color: #fff;
    background-color: none;
    border-color: none;
	height:100px;
}
.panel-i>.panel-heading .a-tit{
	word-wrap:break-word;
	color:#218380;
	font-weight:900;
	font-size:12px;
}
.panel-i>.panel-heading a:hover {
	color:#690500;
	text-decoration:none;
}
.panel-i>.panel-body {
	min-height:150px;
}

.panel-footer{
	background-color:transparent;
	border:none;
}
.btn-a, .btn-a:hover{
	font-weight:bold;
	background-color:#218380;
	color:white;	
}
.btn-b,.btn-b:hover{
	font-weight:bold;
	background-color:#FBB13C;
	color:white;	
}

.column {
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<div class="container" style="padding:0px;margin:40px;">    
  <div class="row">
  
  <div class="col-sm-3"> 
      <h3 align="center">Tour cùng loại</h3>
      
	  <div style="width:270px;">
      <marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="7" height="500px">
      <?php
      foreach($tour as $tt):  
        if($tt["id"] != $tourct["id"]){
      ?>
	  
      <div style="margin:0 5px;">
        <div class="panel panel-i text-center" >
          <div class="panel-heading text-center"">
			<a class="a-tit" href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>" > <?php echo $tt["tentour"]; ?></a>
          </div>
          <div class="panel-body text-center">      
            <a href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>">
            <img src="<?php echo $tt["hinhanh"]; ?>" class="img-responsive" ></a>
            <div>Giá: <span  class="text-danger">
            <?php echo number_format($tt["gia"]); ?>đ</span>  
            </div>
          </div> 
          <div class="panel-footer"><a class="btn btn-a" href="?action=xemchitiet&matour=<?php echo $tt["id"]; ?>">Chi tiết</a> 
            <a class="btn btn-b" href="?action=chovaogio&txtmatour=<?php echo $tt["id"]; ?>&txtsoluong=1">Chọn mua</a>  
          </div>  
        </div>
      </div>
	  
      <?php 
        }
      endforeach; 
      ?>
      </marquee>
      </div>
    </div>  
	
  	<h3 class="text-1 text-center" ><?php echo $tourct["tentour"]; ?></h3>
    
	<div class="col-sm-9">            
      <div class="row">
		<div class="col-sm-8">
			<img class="tour-img" src="<?php echo $tourct["hinhanh"]; ?>">  
	  	</div>
		<div class="col-sm-4">
			<img class="img-add" src="<?php echo $tourct["hinhanh2"]; ?>">  
			<img class="img-add" src="<?php echo $tourct["hinhanh3"]; ?>">  
		</div>
	  </div>
		<div class="row">
		<div class="column-1">
			<span class="text-2" style="font-size:45px;font-weight:bold;color:#690500;"><?php echo number_format($tourct["gia"]); ?> đ</span>
			<h3 class="text-danger">Lịch trình</h3>
			<p><?php echo $tourct["lichtrinh"]; ?></p>
			<form class="form-inline" method="post">
				<input type="hidden" name="action" value="chovaogio">
				<input type="hidden" name="id" value="<?php echo $tourct["id"]; ?>">
				<input type="submit" class="btn btn-m" value="Đặt tour">
			</form>
		</div>
	  </div>    
      <br>
    </div>
  </div>
  
  
</div>
<br>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>