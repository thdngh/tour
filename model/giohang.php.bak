<?php
// Tạo mảng SESSION giohang rỗng nếu nó không tồn tại
if (!isset($_SESSION['giohang']) ) {
    $_SESSION['giohang'] = array();
}

// Hàm thêm sản phẩm vào giỏ
function themtourvaogio($matour, $soluong) {    
    //Cập nhập Số lượng vào SESSION - Làm tròn
    $_SESSION['giohang'][$matour] = round($soluong, 0);    
}

// Cập nhật số lượng của giỏ hàng
function capnhatsoluong($matour, $soluong) {
    if (isset($_SESSION['giohang'][$matour])) {
        $_SESSION['giohang'][$matour] = round($soluong, 0);
    }
}

// Xóa một sản phẩm trong giỏ hàng
function xoamottour($matour) {
    if (isset($_SESSION['giohang'][$matour])) {
        unset($_SESSION['giohang'][$matour]);
    }
}

// Hàm lấy mảng các sản phẩm trong giohang
function laygiohang() {

	//Tạo mảng rỗng để lưu danh sách sản phẩm trong giỏ
	$tt = array();
	$tt_db = new TOUR();
	
	//Duyệt mảng SESSION giohang và lấy từng id sản phẩm cùng số lượng
	        $tt= $tt_db->laytourtheoid($_SESSION['giohang']['matour']);

	return $tt;
}

// Đếm số sản phẩm trong giỏ hàng
function demtourtronggio() {
    return count($_SESSION['giohang']);
}

// Đếm tổng số lượng các sản phẩm trong giỏ
function demsoluongtronggio() {
    $tongsl = 0;
	//Lấy mảng các sản phẩm từ trong SESSION
    $giohang = laygiohang();
    foreach ($giohang as $item) {
        $tongsl += $item['soluong'];
    }
    return $tongsl;
}

// Tính tổng thành tiền trong giỏ hàng
function tinhtiengiohang () {
    $tong = 0;
    $giohang = laygiohang();
    foreach ($giohang as $tt) {
        $tong += $tt['gia'] * $tt['soluong'];
    }
    return $tong;
}

// Xóa tất cả giỏ hàng
function xoagiohang() {
    $_SESSION['giohang'] = array();
}

?>