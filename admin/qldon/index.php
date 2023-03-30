<?php 
if(!isset($_SESSION["nguoidung"])){
    header("location:../index.php");
}
require_once("../../model/database.php");
require_once("../../model/tour.php");
require_once("../../model/khachhang.php");
require_once("../../model/diachi.php");
require_once("../../model/don.php");
require_once("../../model/donct.php");
// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$tt = new TOUR();
$d = new DON();
switch($action){
    case "xem":
        $don = $d->doctatcadon();
		include("main.php");
        break;
    	case "xoa":
            if(isset($_GET["id"])&& isset($_GET["diachi_id"])&& isset($_GET["diachi_id"]))
                if($d->xoadon($_GET["id"],$_GET["diachi_id"],$_GET["diachi_id"])){
            $don = $d->doctatcadon();
            include("main.php");}

    default:
        break;
}

        
    ?>