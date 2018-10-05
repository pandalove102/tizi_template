<?php
class model extends database
{
    function load_danhsach_nhacungcap()
    {
        $this->setquery("SELECT table_nhacungcap.*, table_trangthai.ten_trangthai 
        FROM table_nhacungcap,table_trangthai 
        WHERE table_nhacungcap.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();

    }
    function load_danhsach_trangthai()
    {
        $this->setquery("SELECT table_trangthai.* FROM table_trangthai WHERE 1");
        return $this->loadallrow();
        
    }
    function load_danhsach_nhomsanpham()
    {
        $this->setquery("SELECT table_nhomsanpham.*, table_trangthai.ten_trangthai 
        FROM table_nhomsanpham,table_trangthai 
        WHERE table_nhomsanpham.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
        
    }
    function load_danhsach_nhombaiviet()
    {
        $this->setquery("SELECT table_nhacungcap.*, table_trangthai.ten_trangthai 
        FROM table_nhacungcap,table_trangthai 
        WHERE table_nhacungcap.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
        
    }
    function load_danhsach_nhomquantri()
    {
        $this->setquery("SELECT table_nhomquantri.*, table_trangthai.ten_trangthai 
        FROM table_nhomquantri,table_trangthai 
        WHERE table_nhomquantri.trangthai=table_trangthai.id_trangthai;");
        return $this->loadallrow();
        
    }
    function load_danhsach_loaikhachhang()
    {
        $this->setquery("SELECT table_loaikhachhang.*, table_trangthai.ten_trangthai 
        FROM table_loaikhachhang,table_trangthai 
        WHERE table_loaikhachhang.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function execute($param = array())
	{
		try{
			$this->statment = $this->pdo->prepare($this->query);
			return $this->statment->execute($param);			
		}
		catch(PDOException $e)
		{
			//muon show ra loi
			//exit('server error');
			//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
			return false;
		}
	}



}

?>