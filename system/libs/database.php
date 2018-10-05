<?php
class database 
{
    protected $pdo,$query,$statment;
    function __construct()
	{
        try{
			$opt= array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
			$this->pdo =new PDO('mysql:host='.$this->HOST.';dbname='.$this->DBNAME,$this->USERNAME,$this->PASSWORD,$opt);
			$this->pdo->query('set names utf8');
		}catch(PDOException $e)
		{
			exit('server error');
		}


    }

    function setquery($sql)
	{
		$this->query =$sql;
	}

    function loadrow($param = array())
	{
		try{
			$this->statment = $this->pdo->prepare($this->query);
			$this->statment->execute($param);
			return $this->statment->fetch(PDO::FETCH_OBJ);
		}
		catch(PDOException $e)
		{
			//muon show ra loi
			//exit('server error');
			//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
			return false;
		}
    }
    
    function loadallrow($param = array())
	{
		try{
			$this->statment = $this->pdo->prepare($this->query);
			$this->statment->execute($param);
			return $this->statment->fetchAll(PDO::FETCH_OBJ);
		}
		catch(PDOException $e)
		{
			//muon show ra loi
			//exit('server error');
			//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
			return false;
		}
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
	function getid()
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
	function disconnect()
	{
		$this->pdo = NULL;
		$this->statment = NULL;
	}







}






















?>