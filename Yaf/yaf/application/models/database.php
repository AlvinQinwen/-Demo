<?php 

class DatabaseModel {
	protected $db;
	public function __construct(){
		$this->db = new PDO('mysql:dbname=tp3.2','root','123');
	}

	public function get($sql){
		$pdo = $this->db->query($sql);
		return $pdo->fetchAll(PDO::FETCH_ASSOC);
	}

	public function add($sql){
		return  $this->db->exec($sql);
	}
}