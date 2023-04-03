<?php
class DONCT{
	
	// Thêm chi tiết đơn hàng mới, trả về khóa của dòng mới thêm
	public function themchitietdon($don_id,$tour_id,$gia,$soluong,$thanhtien){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO donct(don_id, tour_id, dongia, soluong, thanhtien) 
					VALUES(:don_id, :tour_id, :dongia, :soluong, :thanhtien)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':don_id',$don_id);			
			$cmd->bindValue(':tour_id',$tour_id);
			$cmd->bindValue(':dongia',$gia);
			$cmd->bindValue(':soluong',$soluong);
			$cmd->bindValue(':thanhtien',$thanhtien);
			
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

}
?>
