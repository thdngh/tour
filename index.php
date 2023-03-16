<?php 
require("model/database.php");
require("model/danhmuc.php");
require("model/dmvanchuyen.php");
require("model/tttour.php");
require("model/tour.php");
require("model/khachhang.php");
require("model/diachi.php");
require("model/dattour.php");
require("model/donhangct.php");

$dm = new DANHMUC();
$dmvn = new DMVANCHUYEN();
$mt = new TTTOUR();
$dt = new DATTOUR();
$kh = new KHACHHANG();
$danhmuc = $dm->laydanhmuc();
$soluong=1;
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}
$tttournoibat = $mt->laytournoibat();

switch($action){
    case "macdinh": 
        
        // xử lý phân trang
        $tongmt = $mt->demtongsotour();   // tổng số mặt hàng
        $soluong = 8;                           // số lượng mh hiển thị trên trang 
        $tongsotrang = ceil($tongmt/$soluong);  // tổng số trang
        if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
            $tranghh = 1;   
        else                                    // hoặc hiển thị trang do người dùng chọn
            $tranghh = $_REQUEST["trang"];
        if($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
        $tttour = $mt->laytourphantrang($batdau, $soluong);
        include("main.php");
        break;
    case "xemnhom": 
        if(isset($_REQUEST["madm"])){
            $madm = $_REQUEST["madm"];
            $dmuc = $dm->laydanhmuctheoid($madm);
            $tendm =  $dmuc["tendanhmuc"];   
            $tttour = $mt->laymathangtheodanhmuc($madm);
            include("group.php");
        }
        else{
            include("main.php");
        }
        break;
    case "xemchitiet": 
        if(isset($_GET["mahang"])){
            $mahang = $_GET["mahang"];
            // tăng lượt xem lên 1
            $mt->tangluotxem($mahang);
            // lấy thông tin chi tiết mặt hàng
            $mhct = $mt->laytourtheoid($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mhct["danhmuc_id"];
            $tttour = $mt->laytourtheodanhmuc($madm);
            include("detail.php");
        }
        break;
    case "dattour":
        if(isset($_REQUEST["id_nguoidung"]))
            $tttour = $_REQUEST["id_nguoidung"];
        if(isset($_REQUEST["diachi_id"]))
            $tttour = $_REQUEST["diachi_id"];
        if(isset($_REQUEST["ngay"]))
            $tttour = $_REQUEST["ngay"];
        if(isset($_REQUEST["tongtien"]))
            $tttour = $_REQUEST["tongtien"];
        if(isset($_REQUEST["ghichu"]))
            $tttour = $_REQUEST["ghichu"];
        include("tour.php");
        break;

    case "xemgiohang":
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "capnhatgiohang":
        if(isset($_REQUEST["mt"])){
            $mh = $_REQUEST["mt"];
        
            foreach($mt as $mahang => $soluong){
                if($soluong > 0)
                    capnhatsoluong($mahang, $soluong);
                else
                    xoamotmathang($mahang);
            }
        }
        $giohang = laygiohang();
        include("cart.php");
        break;

    case "dangnhap":
            include("loginform.php");
            break;
    
    case "xoagiohang":
        xoagiohang();
        $giohang = laygiohang();
        include("cart.php");
        break;
	case "datmua":        
        $giohang = laygiohang();
        include("checkout.php");
        break;
	case "luudonhang":
        $email = $_POST["txtemail"];
		$hoten = $_POST["txthoten"];
		$sodienthoai = $_POST["txtdienthoai"];
		$diachi = $_POST["txtdiachi"];
        
		// lưu thông tin khách nếu chưa có trong db (kiểm tra email có tồn tại chưa)
		// xử lý thêm...
		//$kh = new KHACHHANG();
		$khachhang_id = $kh->themkhachhang($email,$sodienthoai,$hoten);
		
		// lưu địa chỉ khách
		$dc = new DIACHI();
		$diachi_id = $dc->themdiachi($khachhang_id,$diachi);
		
		// lưu đơn hàng
		$dh = new DONHANG();
		$tongtien = tinhtiengiohang();
		$donhang_id = $dh->themdonhang($khachhang_id,$diachi_id,$tongtien);
		
		// lưu chi tiết đơn hàng
		$ct = new DONHANGCT();		
		$giohang = laygiohang();
		foreach($giohang as $mahang => $mh){
			$dongia = $mh["giaban"];
			$soluong = $mh["soluong"];
			$thanhtien = $mh["sotien"];
			$ct->themchitietdonhang($donhang_id,$mahang,$dongia,$soluong,$thanhtien);
			$mh = new MATHANG();
			$mh->capnhatsoluong($mahang, $soluong);
		}
		
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
        $dh = new DONHANG();
        $donhang = $dh->docdonhang($emailget);
        
		include("info.php");
        break;
        case "xacnhandonhang":
            // lưu chi tiết đơn hàng
            $emailget = $_REQUEST["email"];
            
            $id = $_REQUEST["id"];
            $dh = new DONHANG();
            $donhang = $dh->xacnhandonhang($emailget,$id);
            
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
            $mhct = $mh->timkiem($timkiem);
            $mh->tangluotxem($mhct["id"]);
            // var_dump($timkiem);
            // var_dump($mhct);
            // lấy thông tin chi tiết mặt hàng
            // $mhct = $mh->laymathangtheoid($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mhct["danhmuc_id"];
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("detail_search.php");
            break;

	case "dangxuat":
		unset($_SESSION["khachhang"]);
		// chuyển về trang chủ
		// xử lý phân trang
        $tongmh = $mh->demtongsomathang();   // tổng số mặt hàng
        $soluong = 8;                           // số lượng mh hiển thị trên trang 
        $tongsotrang = ceil($tongmh/$soluong);  // tổng số trang
        if(!isset($_REQUEST["trang"]))          // trang hiện hành: mặc định là trang đầu
            $tranghh = 1;   
        else                                    // hoặc hiển thị trang do người dùng chọn
            $tranghh = $_REQUEST["trang"];
        if($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh-1)*$soluong;          // mặt hàng bắt đầu sẽ lấy
        $mathang = $mh->laymathangphantrang($batdau, $soluong);
        include("main.php");
		break;
    default:
        break;
}
?>
