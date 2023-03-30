<?php
class DONHANGCT{
	
	// Thêm chi tiết đơn hàng mới, trả về khóa của dòng mới thêm
	public function themchitietdon($don_id,$mathang_id,$dongia,$soluong,$thanhtien){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO donct(don_id, mathang_id, dongia, soluong, thanhtien) 
					VALUES(:don_id, :mathang_id, :dongia, :soluong, :thanhtien)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':don_id',$donhang_id);			
			$cmd->bindValue(':mathang_id',$mathang_id);
			$cmd->bindValue(':dongia',$dongia);
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
