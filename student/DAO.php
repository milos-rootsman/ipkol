<?php
require_once '../config/db.php';

class DAO {
	private $db;

	private $UPDATEOSOBA = "UPDATE student SET ime=?,prezime=?,brIndexa=? WHERE id=?";
	private $SELECTBYID = "SELECT * FROM student WHERE id = ?";	
	private $SELECTALL = "SELECT * FROM student ORDER BY id ASC";	

	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}


	public function update($ime, $prezime, $brIndexa, $id)
	{
		$statement = $this->db->prepare($this->UPDATEOSOBA);
		$statement->bindValue(1, $ime);
		$statement->bindValue(2, $prezime);
		$statement->bindValue(3, $brIndexa);
		$statement->bindValue(4, $id);
		
		$statement->execute();

		if($statement->rowCount() =='0'){
			return false;
		} else {
			return true;
		}
	}

	public function studentExist($idstudent)
	{
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $idstudent);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}

	public function studenti()
	{
		$statement = $this->db->prepare($this->SELECTALL);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
}
?>
