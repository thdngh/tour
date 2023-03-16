<?php
class DMVANCHUYEN{
    private $id;
    private $tendanhmuc;

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }

    public function getTendanhmuc(){
        return $this->tendanhmuc;
    }

    public function setTendanhmuc($value){
        $this->tendanhmuc = $value;
    }

    // Lấy danh sách
    public function laydmvanchuyen(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM dmvanchuyen";
            $cmd = $dbcon->prepare($sql);
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

    // Thêm mới
    public function themdmvanchuyen($tendm){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO dmvanchuyen(tendanhmuc) VALUES(:tendanhmuc)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tendanhmuc", $tendm);
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
    public function xoadmvanchuyen($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM dmvanchuyen WHERE id=:id";
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

    // Cập nhật 
    public function suadmvanchuyen($id, $tendm){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE dmvanchuyen SET tendanhmuc=:tendanhmuc WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tendanhmuc", $tendm);
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

    // Lấy danh mục theo id
    public function laydmvanchyentheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM dmvanchuyen WHERE id=:id";
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

}
?>
