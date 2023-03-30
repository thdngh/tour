<?php 
if(!isset($_SESSION["nguoidung"])){
    header("location:../index.php");
}
require("../../model/database.php");
require("../../model/danhmuc.php");
require("../../model/tour.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$dm = new DANHMUC();
$tt = new TOUR();

switch($action){
    case "xem":
        $tour = $tt->laytttour();
		include("main.php");
        break;
	case "them":
		$danhmuc = $dm->laydanhmuc();
		include("addform.php");
        break;
	case "xulythem":	
		// xử lý file upload
		$hinhanh = "images/" . basename($_FILES["filehinhanh"]["name"]); // đường dẫn ảnh lưu trong db
		$duongdan = "../../" . $hinhanh; // nơi lưu file upload
		move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
		// xử lý thêm		
		$danhmuc_id = $_POST["optdanhmuc"];
		$tentour = $_POST["txttentour"];
		$gia = $_POST["txtgia"];
		$lichtrinh = $_POST["txtlichtrinh"];
		$tt->themtour($tentour,$lichtrinh,$gia,$danhmuc_id,$hinhanh);
		$tour = $tt->laytttour();
		include("main.php");
        break;
	case "xoa":
		if(isset($_GET["id"]))
			$tt->xoatour($_GET["id"]);
		$tour = $tt->laytttour();
		include("main.php");
		break;	
    case "sua":
        if(isset($_GET["id"])){ 
            $t = $tt->laytourtheoid($_GET["id"]);
            $danhmuc = $dm->laydanhmuc(); 
            include("updateform.php");
        }
        else{
            $tour = $tt->laytttour();        
            include("main.php");            
        }
        break;
    case "xulysua":
        $id = $_POST["txtid"];
        $danhmuc_id = $_POST["optdanhmuc"];
        $tentour = $_POST["txttentour"];
        $lichtrinh = $_POST["txtlichtrinh"];
        $gia = $_POST["txtgia"];
        $luotxem = $_POST["txtluotxem"];
        $luotmua = $_POST["txtluotmua"];
        $hinhanh = $_POST["txthinhcu"];

        // upload file mới (nếu có)
        if($_FILES["filehinhanh"]["name"]!=""){
            // xử lý file upload -- Cần bổ dung kiểm tra: dung lượng, kiểu file, ...       
            $hinhanh = "images/" . basename($_FILES["filehinhanh"]["name"]);// đường dẫn lưu csdl
            $duongdan = "../../" . $hinhanh; // đường dẫn lưu upload file        
            move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
        }
        
        // sửa mặt hàng
        $tt->suatour($id,$tenmtour,$gia,$danhmuc_id,$hinhanh,$luotxem,$luotmua);         
    
        // hiển thị ds mặt hàng
        $tour = $tt->laytttour();    
        include("main.php");
        break;

    default:
        break;
}
?>