<?php
class noticias extends model {

	public function getNoticias($offset = 0, $limit = 0) {
		$array = array();

		$sql = "SELECT * FROM noticias ORDER BY id DESC";
		if($limit > 0) {
			$sql .= " LIMIT ".$offset.",".$limit;
		}

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getTotal(){
		$sql = "SELECT COUNT(*) AS total FROM noticias";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['total'];
	}

}
?>