<?php 
require("model/database.php");
require("model/danhmuc.php");
require("model/tour.php");
require("model/giohang.php");
require("model/khachhang.php");
require("model/diachi.php");
require("model/don.php");
require("model/donct.php");
require("model/nguoidung.php");

$dm = new DANHMUC();
$tt = new TOUR();
$kh = new KHACHHANG();
$danhmuc = $dm->laydanhmuc();
$soluong=1;
$tournoibat = $tt->laytournoibat();

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

switch($action){
    case "macdinh": 
        
        // xử lý phân trang
        $tongtour = $tt->demtongsotour();   // tổng số mặt hàng
        $soluong = 8;                           // số lượng mh hiển thị trên trang 
        $tongsotrang = ceil($tongtour/$soluong);  // tổng số trang
        if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
            $tranghh = 1;   
        else                                    // hoặc hiển thị trang do người dùng chọn
            $tranghh = $_REQUEST["trang"];
        if($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
        $tour = $tt->laytourphantrang($batdau, $soluong);
        include("main.php");
        break;    
		
    case "xemnhom": 
        if(isset($_REQUEST["madm"])){
            $madm = $_REQUEST["madm"];
            $dmuc = $dm->laydanhmuctheoid($madm);
            $tendm =  $dmuc["tendanhmuc"];   
            $tour = $tt->laytourtheodanhmuc($madm);
			
			/*$tongtour = $tt->demtourdm();   // tổng số mặt hàng
			$soluong = 6;                           // số lượng mh hiển thị trên trang 
			$tongsotrang = ceil($tongtour/$soluong);  // tổng số trang
			if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
				$tranghh = 1;   
			else                                    // hoặc hiển thị trang do người dùng chọn
				$tranghh = $_REQUEST["trang"];
			if($tranghh > $tongsotrang)
				$tranghh = $tongsotrang;
			else if($tranghh < 1)
				$tranghh = 1;
			$batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
			$tour = $tt->layphantrangdm($batdau, $soluong);*/
			
            include("group.php");
        }
        else{
            include("main.php");
        }
		
		
        break;
    case "xemchitiet": 
        if(isset($_GET["matour"])){
            $matour = $_GET["matour"];
            // tăng lượt xem lên 1
            $tt->tangluotxem($matour);
            // lấy thông tin chi tiết mặt hàng
            $tourct = $tt->laytourtheoid($matour);
            // lấy các mặt hàng cùng danh mục
            $madm = $tourct["danhmuc_id"];
            $tour = $tt->laytourtheodanhmuc($madm);
            include("detail.php");
        }
        break;
    /*case "chovaogio":
        if(isset($_REQUEST["id"]))
            $mahang = $_REQUEST["id"];
        if(isset($_REQUEST["soluong"]))
            $soluong = $_REQUEST["soluong"];
        if(isset($_SESSION['giohang'][$mahang])){ // nếu đã có trong giỏ thi tăng số lượng
            $soluong += $_SESSION['giohang'][$mahang];
            $_SESSION['giohang'][$mahang] = $soluong;
        }
        else{       // nếu chưa thì thêm vào giỏ
            themhangvaogio($mahang, $soluong);
        }
        
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "xemgiohang":
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "capnhatgiohang":
        if(isset($_REQUEST["tt"])){
            $tt = $_REQUEST["tt"];
        
            foreach($tt as $tour => $soluong){
                if($soluong > 0)
                    capnhatsoluong($mahang, $soluong);
                else
                    xoamotmathang($mahang);
            }
        }
        $giohang = laygiohang();
        include("cart.php");
        break;
    
    case "xoagiohang":
        xoagiohang();
        $giohang = laygiohang();
        include("cart.php");
        break;*/
	case "dangnhap":
		include("loginform.php");
		break;
		
	case "dattour":        
        if(isset($_REQUEST["id"]))
            $matour = $_REQUEST["id"];
        if(isset($_REQUEST["soluong"]))
            $soluong = $_REQUEST["soluong"];
            $_SESSION['giohang']['matour'] = $matour;
              // nếu chưa thì thêm vào giỏ
            themtourvaogio($matour,$soluong);
        
        $giohang = laygiohang();
        include("checkout.php");
        break;
		
	case "luudonhang":
        $email = $_POST["txtemail"];
		$hoten = $_POST["txthoten"];
		$sodienthoai = $_POST["txtdienthoai"];
		$diachi = $_POST["txtdiachi"];
        $matour = $_REQUEST["id"];
        
		// lưu thông tin khách nếu chưa có trong db (kiểm tra email có tồn tại chưa)
		// xử lý thêm...
		//$kh = new KHACHHANG();
		$khachhang_id = $kh->themkhachhang($email,$sodienthoai,$hoten);
		
		// lưu địa chỉ khách
		$dc = new DIACHI();
		$diachi_id = $dc->themdiachi($khachhang_id,$diachi);
		
		// lưu đơn hàng
		$dh = new DON();
		$tongtien = tinhtiengiohang();
		$don_id = $dh->themdon($khachhang_id,$diachi_id,$tongtien);
		
		// lưu chi tiết đơn hàng
		$ct = new DONCT();		
		$giohang = laygiohang();
		
			$gia = $giohang["gia"];
			$soluong = $_REQUEST["txtsonguoi"];
			$thanhtien = tinhtiengiohang();
			$ct->themchitietdon($don_id,$matour,$gia,$soluong,$thanhtien);
			$tt = new TOUR();
			// $tt->capnhatsoluong($matour, $soluong);
		
		
		// xóa giỏ hàng
		xoagiohang();
		
		// chuyển đến trang cảm ơn
		include("message.php");
        break;
    
	case "xldangnhap":
		$email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($kh->kiemtrakhachhanghople($email,$matkhau)==TRUE){
            $_SESSION["khachhang"] = $kh->laythongtinkhachhang($email);
            // đọc thông tin (đơn hàng) của kh
			include("info.php");
        }
        else{
            $tb = "Đăng nhập không thành công!";
            include("loginform.php");
        }
        break;
	case "xemthongtin":
		// lưu chi tiết đơn hàng
        $emailget = $_REQUEST["email"];
        $d = new DON();
        $don= $d->docdon($emailget);
        
		include("info.php");
        break;
        case "xacnhandonhang":
            // lưu chi tiết đơn hàng
            $emailget = $_REQUEST["email"];
            
            $id = $_REQUEST["id"];
            $d = new DON();
            $don= $d->xacnhandon($emailget,$id);
            
            include("info.php");
            break;    

    case "themkhachhang":
        $hoten = $_POST["txthoten"];
        $email = $_POST["txtemail"];
        $dienthoai = $_POST["txtdienthoai"];
        $matkhau = $_POST["txtmatkhau"];
        $nlmatkhau = $_POST["txtnlmatkhau"];
        if($nd->laythongtinnguoidung($email)){   // có thể kiểm tra thêm số đt không trùng
            $tb = "Email này đã được cấp tài khoản!";
            include("signin.php");
            break;
        }
        else{
            if(!$nd->themkhachhang($email,$matkhau,$dienthoai,$hoten)){
                $tb = "Không thêm được!";
                include("signin.php");
                break;
            }
            header("location:../../loginform.php");
            break;
          
        }
	case "timkiem":
		$timkiem = $_REQUEST["search"];
		$tourct = $tt->timkiem($timkiem);
		$tt->tangluotxem($tourct["id"]);
		// var_dump($timkiem);
		// var_dump($mhct);
		// lấy thông tin chi tiết mặt hàng
		// $mhct = $mh->laymathangtheoid($mahang);
		// lấy các mặt hàng cùng danh mục
		$madm = $tourct["danhmuc_id"];
		$tour = $tt->laytourtheodanhmuc($madm);
		include("detail_search.php");
		break;
	case "lienhe":
		include("lienhe.php");
		break;
    case "gioithieu":
        include("gioithieu.php");
        break;
    case "khuyenmai":
        include("khuyenmai.php");
        break;
    case "xoadon":
        if(isset($_GET["id"]))
            $tt->xoatour($_GET["id"]);
        $tour = $tt->laytttour();
        include("checkout.php");
        break;	
	case "dangxuat":
		unset($_SESSION["khachhang"]);
		// chuyển về trang chủ
		// xử lý phân trang
        $tongtour = $tt->demtongsotour();   // tổng số mặt hàng
        $soluong = 8;                           // số lượng mh hiển thị trên trang 
        $tongsotrang = ceil($tongtour/$soluong);  // tổng số trang
        if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
            $tranghh = 1;   
        else                                    // hoặc hiển thị trang do người dùng chọn
            $tranghh = $_REQUEST["trang"];
        if($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
        $tour = $tt->laytourphantrang($batdau, $soluong);
        include("main.php");
		break;
    default:
        break;
}
?>
