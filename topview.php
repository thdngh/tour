<style>
.panel{
	height:420px;
	width:270px;
}

.panel-tv{
	border:1px solid none;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);

}
.panel-tv>.panel-heading {
    color: #17255a;
    background-color: none;	
	padding-bottom:0;
}

.panel-title{
    font-size:20px;
}

.panel-tv>.panel-body {
	height:310px;
}
.panel-tv>.panel-footer {
	height:55px;
}
.btn-a, .btn-a:hover{
	font-weight:bold;
	background-color:#17255a;
	color:white;	
	border-radius:100px;
	margin:0 5px;
}
.btn-b,.btn-b:hover{
	font-weight:bold;
	background-color:#FBB13C;
	color:white;	
	border-radius:100px;
	margin:0 5px;
}
.panel-footer{
	background-color:transparent;
	border:none;
}


</style>

<div class="row"> 
    <!-- Hàng nổi bật -->    
    <h3 align="center">Tour nổi bật</h3>
	<br>
    <?php
    foreach($tournoibat as $tnb):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-tv text-center">
        <div class="panel-heading">
          <strong>
          <a class="panel-title"  href="?action=xemnhom&madm=<?php echo $tnb["danhmuc_id"]; ?>">
          <?php echo $tnb["tendanhmuc"]; ?>
          </strong>
          </a>  
        </div>
        <div class="panel-body center">
          <a href="?action=xemchitiet&matour=<?php echo $tnb["id"]; ?>"><img src="<?php echo $tnb["hinhanh"]; ?>" class="img-responsive" style="width:100%; margin-bottom:10px;" alt="<?php echo $tnb["tentour"]; ?>"></a>
          <a href="?action=xemchitiet&matour=<?php echo $tnb["id"]; ?>" style="color:#218380;font-weight:bold;font-size:15px; "><?php echo $tnb["tentour"]; ?></a>
        </div>
        <div class="panel-footer">
          <a class="btn btn-a" href="?action=xemchitiet&matour=<?php echo $tnb["id"]; ?>">Chi tiết</a>
          <a class="btn btn-b" href="?action=dattour&id=<?php echo $tnb["id"]; ?>&soluong=1">Đặt tour</a>
        </div>
      </div>
    </div> 
    <?php endforeach; ?>
</div>
