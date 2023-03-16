<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");
require("../../model/database.php");
require("../../model/danhmuc.php");
require("../../model/dmvanchuyen.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$dm = new DANHMUC();
$idsua = 0;

switch($action){
    case "xem":
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
    case "them":
        $dm->themdanhmuc($_POST["txtten"]);    
		$danhmuc = $dm->laydanhmuc(); 
        include("main.php");
        break;
	case "xoa":
        $dm->xoadanhmuc($_GET["id"]);    
		$danhmuc = $dm->laydanhmuc(); 
        include("main.php");
        break;
	case "sua":
		$idsua = $_GET["id"];
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
	case "capnhat":
		$dm->suadanhmuc($_POST["txtid"], $_POST["txtten"]);
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
    default:
        break;
}
$dmvc = new DMVANCHUYEN();
$idsua = 0;

switch($action){
    case "xem":
        $dmvanchuyen = $dmvc->laydanhmuc();       
        include("main.php");
        break;
    case "them":
        $dmvc->themdmvanchuyen($_POST["txtten"]);    
		$dmvanchuyen = $dmvc->laydanhmuc(); 
        include("main.php");
        break;
	case "xoa":
        $dmvc->xoadmvanchuyen($_GET["id"]);    
		$dmvanchuyen = $dmvc->laydanhmuc(); 
        include("main.php");
        break;
	case "sua":
		$idsua = $_GET["id"];
        $dmvanchuyen = $dmvc->laydanhmuc();       
        include("main.php");
        break;
	case "capnhat":
		$dmvc->suadmvanchuyen($_POST["txtid"], $_POST["txtten"]);
        $dmvanchuyen = $dmvc->laydanhmuc();       
        include("main.php");
        break;
    default:
        break;
}
?>
