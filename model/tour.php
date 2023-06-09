<?php
class TOUR{
    // khai báo các thuộc tính - SV tự bổ sung

    //dem tong so tour
    public function demtongsotour(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM tour";
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
	/*public function demtourdm($danhmuc_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM tour group by danhmuc_id=:madm";
            $cmd = $dbcon->prepare($sql);
			$cmd->bindValue(":madm",$danhmuc_id);
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
    }*/
    
// Lấy phân trang, bắt đầu từ mâu 4 tin
public function laytourphantrang($m, $n){
    $dbcon = DATABASE::connect();
    try{
        $sql = "SELECT m.*, d.tendanhmuc
         FROM tour m, danhmuc d 
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
/*public function layphantrangdm($m, $n){
    $dbcon = DATABASE::connect();
    try{
        $sql = "SELECT m.*, d.tendanhmuc
         FROM tour m, danhmuc d 
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
}*/
    
	// Lấy mặt hàng nổi bật top 4 có lượt xem cao nhất
    public function laytournoibat(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT m.*, d.tendanhmuc FROM tour m, danhmuc d WHERE d.id=m.danhmuc_id ORDER BY luotxem DESC LIMIT 0, 4";
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
            $sql = "SELECT * FROM tour";
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
	    // Lấy danh sách tour thuộc 1 danh mục
    public function laytourtheodanhmuc($danhmuc_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tour WHERE danhmuc_id=:madm" ;
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

    // Lấy tour theo id
    public function laytourtheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tour WHERE id=:id";
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
            $sql = "UPDATE tour SET luotxem=luotxem+1 WHERE id=:id";
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
    public function themtour($tentour,$lichtrinh,$gia,$danhmuc_id,$hinhanh,$hinhanh2,$hinhanh3){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO tour(tentour,lichtrinh,gia,danhmuc_id,hinhanh,hinhanh2,hinhanh3,luotxem,luotdat) 
				VALUES(:tentour,:lichtrinh,:gia,:danhmuc_id,:hinhanh,:hinhanh2,:hinhanh3,0,0)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tentour", $tentour);
			$cmd->bindValue(":lichtrinh", $lichtrinh);
			$cmd->bindValue(":gia", $gia);
			$cmd->bindValue(":danhmuc_id", $danhmuc_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
			$cmd->bindValue(":hinhanh2", $hinhanh2);
			$cmd->bindValue(":hinhanh3", $hinhanh3);
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
    public function xoatour($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM tour WHERE id=:id";
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
    /*public function capnhatsoluong($id, $soluong){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE tour SET soluongton=soluongton - :soluong WHERE id=:id";
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
    }*/
    // tim kiem
    public function timkiem($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM tour WHERE tentour like :id";
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
    public function suatour($id, $tentour,$lichtrinh,$gia,$danhmuc_id,$hinhanh,$hinhanh2,$hinhanh3,$luotxem,$luotdat){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE tour SET tentour=:tentour,
										lichtrinh=:lichtrinh,
										gia=:gia,
										danhmuc_id=:danhmuc_id,
										hinhanh=:hinhanh,
										hinhanh2=:hinhanh2,
										hinhanh3=:hinhanh3,
										luotxem=:luotxem,
										luotdat=:luotdat
										WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tentour", $tentour);
			$cmd->bindValue(":lichtrinh", $lichtrinh);
			$cmd->bindValue(":gia", $gia);
			$cmd->bindValue(":danhmuc_id", $danhmuc_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
			$cmd->bindValue(":hinhanh2", $hinhanh2);
			$cmd->bindValue(":hinhanh3", $hinhanh3);
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
