<?php include("../view/top.php"); 
require_once("../../model/database.php");
require_once("../../model/tour.php");
require_once("../../model/don.php");
require_once("../../model/nguoidung.php");
require_once("../../model/khachhang.php");
$d = new DON();
$tt = new tour();

$don = $d->doctatcadon();
?>

<br><br>
<div class="container">  
<div class="row"> 
    <?php //var_dump($don);
    $tongtien = 1;
    ?>
    <h3>Quản lý đơn hàng</h3>  
    <br>
    <table class="table table-hover">
	<tr>
    <th >Email</th>
		<th>Họ tên</th>
		<th>Số điện thoại</th>
		<th> Tên tour</th>
    <th> Số lượng khách</th>
    <th> Đơn giá</th>
		<th> Thành tiền</th>
     
	</tr>
      
        <?php foreach($don as $ctd): ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo  $ctd["email"];  ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctd["hoten"]; ?></td>
		
        <?php $matour = $tt->laytourtheoid($ctd["matour_id"]); ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctd["sodienthoai"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $matour["tentour"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctd["songuoi"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($matour["gia"]) . "đ"; ?></td>
            <td style="font-size:16px;font-family:OpenSans;" ><?php echo number_format($ctd["tongtien"]) . "đ"; ?></td>
    </td>
		</tr>
		<?php 
       
    endforeach; ?>
		
		
    </table>
        
	</div>
    
  </div>




<?php include("../view/bottom.php"); ?>