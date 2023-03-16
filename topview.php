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
<div class="row"> 
    <!-- Hàng nổi bật -->    
    <h3>Sản phẩm nổi bật</h3>
    <?php
    foreach($tttournoibat as $mt):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-danger text-center">
        <div class="panel-heading">
          <strong>
          <a class="panel-title"  href="?action=xemnhom&madm=<?php echo $mt["danhmuc_id"]; ?>">
          <?php echo $mt["tendanhmuc"]; ?>
          </strong>
          </a>  
        </div>
        <div class="panel-body">
          <a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>"><img src="<?php echo $mt["hinhanh"]; ?>" class="img" style="width:100%" alt="<?php echo $mt["tentour"]; ?>"></a>
          <a href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>"><?php echo $mt["tentour"]; ?></a>
        </div>
        <div class="panel-footer">
          <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $mt["id"]; ?>"><i class="fa fa-bars"></i>Chi tiết</a>
          <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $mt["id"]; ?>&soluong=1"><i class="fa fa-shopping-basket"></i>Chọn mua</a>
        </div>
      </div>
    </div> 
    <?php endforeach; ?>
</div>