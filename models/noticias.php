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

	public function getNoticia($id) {
		$array = array();

		$sql = "SELECT * FROM noticias WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotal(){
		$sql = "SELECT COUNT(*) AS total FROM noticias";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['total'];
	}

	public function cadastrarNoticia($usuario, $titulo, $conteudo, $foto){
		$sql = "INSERT INTO noticias (titulo, conteudo, foto, data, usuario) VALUES ('$titulo', '$conteudo', '$foto', CURDATE() ,'$usuario')";
		$sql = $this->db->query($sql);
	}

	public function editarNoticia($id, $titulo, $conteudo, $foto){
		$sql = "UPDATE noticias SET titulo = '$titulo', conteudo = '$conteudo', foto = '$foto' WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}

	public function getNoticiasUsuario($offset = 0, $limit = 0, $id) {
		$array = array();

		$sql = "SELECT * FROM noticias WHERE usuario = '$id' ORDER BY id DESC";
		if($limit > 0) {
			$sql .= " LIMIT ".$offset.",".$limit;
		}

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function verificarNoticiaUsuario($id){
		$sql = "SELECT * FROM noticias WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return true;
		} else {
			return false;
		}
	}

}
?>