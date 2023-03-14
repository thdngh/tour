<?php
class TTTOUR{
    // khai báo các thuộc tính - SV tự bổ sung

    //dem tong so mat hang
    public function demtongsomathang(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM tttour";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchColumn();
            //rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    
// Lấy mặt hàng phân trang, bắt đầu từ mâu 4 tin
public function laymathangphantrang($m, $n){
    $dbcon = DATABASE::connect();
    try{
        $sql = "SELECT m.*, d.tendanhmuc
         FROM tttour m, danhmuc d 
         WHERE d.id=m.danhmuc_id 
         ORDER BY id DESC 
         LIMIT $m, $n";
        $cmd = $dbcon->prepare($sql);
        $cmd->execute();
        $ketqua = $cmd->fetchAll();
        return $ketqua;
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo "<p>Lỗi truy vấn: $error_message</p>";
        exit();
    }
}
    
	// Lấy mặt hàng nổi bật top 4 có lượt xem cao nhất
    public function laymathangnoibat(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT m.*, d.tendanhmuc FROM tttour m, danhmuc d WHERE d.id=m.danhmuc_id ORDER BY luotxem DESC LIMIT 0, 4";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy danh sách
    public function laytttour(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tttour";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
	    // Lấy danh sách mặt hàng thuộc 1 danh mục
    public function laymathangtheodanhmuc($danhmuc_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tttour WHERE danhmuc_id=:madm" ;
            $cmd = $dbcon->prepare($sql);
			$cmd->bindValue(":madm",$danhmuc_id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy mặt hàng theo id
    public function laymathangtheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tttour WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật lượt xem
    public function tangluotxem($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE tttour SET luotxem=luotxem+1 WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
	
	// Thêm mới
    public function themtour($tenmathang,$mota,$gia,$danhmuc_id,$hinhanh){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO tttour(tentour,mota,gia,danhmuc_id,hinhanh,luotxem,luotdat) 
				VALUES(:tentour,:mota,:gia,:soluongton,:danhmuc_id,:hinhanh,0,0)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tentour", $tentour);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":gia", $gia);
			$cmd->bindValue(":danhmuc_id", $danhmuc_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Xóa 
    public function xoamathang($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM tttour WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function capnhatsoluong($id, $soluong){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE tttour SET soluongton=soluongton - :soluong WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":soluong", $soluong);
			$cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // tim kiem
    public function timkiem($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tttour WHERE soluongton > 0 AND tentour like :id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật 
    public function suatour($id, $tentour,$mota,$giagoc,$giaban,$soluongton,$danhmuc_id,$hinhanh,$luotxem,$luotmua){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE mathang SET tentour=:tenmathang,
										mota=:mota,
										gia=:gia,
										danhmuc_id=:danhmuc_id,
										hinhanh=:hinhanh,
										luotxem=:luotxem,
										luotdat=:luotdat
										WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tentour", $tentour);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":gia", $gia);
			$cmd->bindValue(":danhmuc_id", $danhmuc_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
			$cmd->bindValue(":luotxem", $luotxem);
			$cmd->bindValue(":luotdat", $luotdat);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

}
?>
