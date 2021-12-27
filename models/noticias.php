<?php
class noticias extends model {

	public function getNoticias($limit = 0) {
		$array = array();

		$sql = "SELECT * FROM noticias ORDER BY id DESC;";
		if($limit > 0) {
			$sql .= " LIMIT ".$limit;
		}

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}
?>