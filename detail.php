<?php include("view/carousel.php"); ?>
<?php include("view/top.php"); ?>
<br><br>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
.badge {
  background-color: red;
  color: white;
  padding: 4px 8px;
  text-align: center;
  border-radius: 20px;
}
.body{
  background-color: #EB9486;
}
</style>
</head>
<body>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">      
      <h3 class="text-primary"> <span class="badge">Mall</span><?php echo $mhct["tentour"]; ?></h3>
      <div><img src="<?php echo $mhct["hinhanh"];?> " style="width:300px"></div>
      <h3 class="text-primary">Giá: 
        <span class="text-danger"><?php echo number_format($mhct["gia"]); ?> đ</span>
      </h3>
      <form class="form-inline" method="post">
			<input type="hidden" name="action" value="chovaogio">
			<input type="hidden" name="id" value="<?php echo $mhct["id"]; ?>">
			<input type="number" class="form-control" name="soluong" value="1" required>
			<input type="submit" class="btn btn-info" value="chọn mua">
      <h2>Đánh Giá</h2>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
</div>
      <div class="col-sm-4"> 
      <h3 class="text-danger">Mô tả Sản Phẩm </h3>
      <p><?php echo $mhct["mota"]; ?></p>
</div>
      <div class="col-sm-4"> 
      <marquee direction="down" onmouseover="stop()" onmouseout="start()" height="580px">
      <?php
      foreach($mathang as $m):  
        if($m["id"] != $mhct["id"]){
      ?>
      <div>
        <div class="panel panel-info text-center">
          <div class="panel-heading">
          <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">
            <?php echo $m["tentour"]; ?>
          </a>
          </div>
          <div class="panel-body">      
            <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">
            <img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive" style="width:100%"></a>
            <div>Giá: <span  class="text-danger">
            <?php echo number_format($m["gia"]); ?>đ</span>  
            </div>
          </div> 
          <div class="panel-footer">
          <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"><i class="fa fa-bars"></i>Chi tiết</a> 
          <a class="btn btn-danger" href="?action=chovaogio&txtmahang=<?php echo $m["id"]; ?> &txtsoluong=1"><i class="fa fa-shopping-basket"></i>Chọn mua</a>  
          </div>  
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
		</form>
	  </div>
      </div>
      <br>
    </div>
    </div>    
  </div>
</div>
</body>
<?php include("view/bottom.php"); ?>