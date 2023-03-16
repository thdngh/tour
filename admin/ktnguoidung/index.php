<?php 
require("../../model/database.php");
require("../../model/nguoidung.php");

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
    $action = "dangnhap";
}
else{
    $action="macdinh"; 
}

$nguoidung = new NGUOIDUNG();
$tb = "";

switch($action){
    case "macdinh":              
        include("main.php");
        break;
    case "dangxuat":        
        unset($_SESSION["nguoidung"]);                
        $tb = "Cảm ơn!";
        include("loginad.php");
        break;
    case "dangnhap":
        include("loginform.php");
        break;
    case "xldangnhap":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($nguoidung->kiemtranguoidunghople($email,$matkhau)==TRUE){
            $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
            include("main.php");
        }
        else{
            $tb = "Đăng nhập không thành công!";
            include("loginad.php");
        }
        break;
    case "dangky":
        include("signin.php");
        break;
    case "capnhaths":
        $mand = $_POST["txtid"];
        $email = $_POST["txtemail"];
        
        $sodt = $_POST["txtdienthoai"];
        $hoten = $_POST["txthoten"];
        $hinhanh = basename($_FILES["fhinh"]["name"]);
        $duongdan = "../images/" . $hinhanh;
        move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);
        
        $nguoidung->capnhatnguoidung($mand,$email,$sodt,$hoten,$hinhanh);

        $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
        include("main.php");        
        break;

    case "doimatkhau":
         if (isset($_POST["txtemail"]) && isset($_POST["txtmatkhaumoi"]) )
            $nguoidung->doimatkhau($_POST["txtemail"],$_POST["txtmatkhaumoi"]);
        include("main.php");
        break;    
     case "themkhachhang":
        $hoten = $_POST["txthoten"];
        $email = $_POST["txtemail"];
        $dienthoai = $_POST["txtdienthoai"];
        $matkhau = $_POST["txtmatkhau"];
        $nlmatkhau = $_POST["txtnlmatkhau"];
        // if($nd->kiemtranguoidunghople($email,$matkhau)){   // có thể kiểm tra thêm số đt không trùng
        //     $tb = "Email này đã được cấp tài khoản!";
        //     include("signin.php");
        //     break;
        // }
        // else{
            if(!$nguoidung->themnguoidung($email,$matkhau,$dienthoai,$hoten,3)){
                $tb = "Không thêm được!";
                include("signin.php");
                break;
            }

            header("location:../../loginform.php");
            break;
          
        // }

    default:
        break;
}
?>
