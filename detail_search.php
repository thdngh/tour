<?php include("view/top.php");
 include("view/carousel.php");
 ?>
<br><br>
<div class="container">    
  <div class="row">
    <div class="col-sm-9">      

      <h3 class="text-primary"><?php echo $mhct["tenmathang"]; ?></h3>
      
      <div><img src="<?php echo $mhct["hinhanh"]; ?>"></div>

      <h4 class="text-primary" style="font-size:16px; font-family:OpenSans;font-weight:bold;">Giá bán: 
        <span class="text-danger" style="font-size:16px; font-family:OpenSans;"><?php echo number_format($mhct["giaban"]); ?> đ</span>
      </h4>
      
      <div>
        <h4 style="font-size:16px; font-family:OpenSans;font-style:italic;"><?php echo $mhct["mota"]; ?></h4>
        <div>
		<form class="form-inline" method="post">
			<input type="hidden" name="action" value="chovaogio">
			<input type="hidden" name="id" value="<?php echo $mhct["id"]; ?>">
			<input type="number" class="form-control" style="font-size:16px; font-family:OpenSans;" name="soluong" value="1" required>
			<input type="submit" class="btn btn-info" style="font-size:16px; font-family:OpenSans;" value="Chọn mua">
		</form>
	  </div>
      </div>
      <br>
    </div>
    <div class="col-sm-3"> 
      <h3>Sản phẩm cùng loại:</h3>
      <div style="height: 300px;">
      <marquee direction="up" onmouseover="stop()" onmouseout="start()" height="650">
      <?php
      foreach($mathang as $m):  
        if($m["id"] != $mhct["id"]){
      ?>
      <div>
        <div class="panel panel-info text-center">
          <div class="panel-heading">
          <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"style="font-size:16px; font-family:OpenSans;text-decoration:none;">
            <?php echo $m["tenmathang"]; ?>
          </a>
          </div>
          <div class="panel-body">      
            <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">
            <img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive" style="width:100%"></a>
            <div style="font-size:16px; font-family:OpenSans;font-weight:bold;">Giá bán: <span  class="text-danger" style="font-size:16px; font-family:OpenSans;font-weight:bold;">
            <?php echo number_format($m["giaban"]); ?>đ</span>  
            </div>
          </div> 
          <div class="panel-footer"><a class="btn btn-info" href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"style="font-size:16px; font-family:OpenSans;">
            Chi tiết</a> 
            <a class="btn btn-danger" href="?action=chovaogio&txtmahang=<?php echo $m["id"]; ?> "style="font-size:16px; font-family:OpenSans; &txtsoluong=1">Chọn mua</a>  
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
  </div>
  
</div>


<?php include("view/bottom.php"); ?>