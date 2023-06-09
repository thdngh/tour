<?php
class DON{
	
	// Thêm đơn hàng mới, trả về khóa của dòng mới thêm
	public function themdon($nguoidung_id,$diachi_id,$tongtien){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO don(nguoidung_id, diachi_id, tongtien) 
					VALUES(:nguoidung_id,:diachi_id,:tongtien)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':nguoidung_id',$nguoidung_id);			
			$cmd->bindValue(':diachi_id',$diachi_id);
			$cmd->bindValue(':tongtien',$tongtien);
			$cmd->execute();
			$id = $db->lastInsertId();
			return $id;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "<p>Lỗi truy vấn: $error_message</p>";
			exit();
		}
	}
	
	
	// Đọc ds đơn hàng của 1 khách
	public function docdon($nguoidung_id ){
		$db = DATABASE::connect();
		try{
			$sql ="SELECT *, ct.id as idct FROM don d, nguoidung nd, donct ct, diachi dc WHERE nd.id = d.nguoidung_id and ct.don_id = d.id and dc.id = d.diachi_id and nd.email=:id and ct.xacnhan <> 1 ORDER BY d.id";
			$cmd = $db->prepare($sql);
            $cmd->bindValue(":id", $nguoidung_id);
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
	public function xacnhandon($nguoidung_id,$id){
		$db = DATABASE::connect();
		try{
			var_dump($id);
			$sql ="UPDATE `donct` SET xacnhan= 1 WHERE id = :id";
			$cmd = $db->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result =  $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
			
    }
	public function doctatcadon(){
		$db = DATABASE::connect();
		try{
			$sql ="SELECT * ,ct.id as ctid,d.id as did FROM nguoidung nd, don d, donct ct, diachi dc WHERE nd.id = d.nguoidung_id and ct.don_id = d.id and dc.id = d.diachi_id ORDER BY d.id";
			$cmd = $db->prepare($sql);
            // $cmd->bindValue(":id", $nguoidung_id);
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
	
	
}
?>
