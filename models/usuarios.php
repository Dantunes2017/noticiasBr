<?php
class usuarios extends model {

	public function logar($email, $senha) {

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$_SESSION['login'] = $sql['id'];

			header("Location: ".BASE_URL."painel");
			exit;
		} else {
			return "E-mail e/ou senha errados!";
		}

	}

	public function verificarLogin() {
		if(!isset($_SESSION['login']) || ( isset($_SESSION['login']) && empty($_SESSION['login']))){
			return false;
		}else{
			return true;
		}
	}

	public function verificarSenha($id, $senha) {
		$sql = "SELECT * FROM usuarios WHERE id = '$id' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return true;
		} else {
			return false;
		}
	}

	public function getNome($id) {
		$sql = "SELECT nome FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return $sql['nome'];
		} else {
			return '';
		}
	}

	public function update($id, $nome, $sobreNome, $tel){
		$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobreNome', tel = '$tel' WHERE id = '$id'";

		$sql = $this->db->query($sql);
	}

	public function updatePass($id, $senha){
		$sql = "UPDATE usuarios SET senha = '$senha' WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}

	public function getUsuarios($offset = 0, $limit = 0) {
		$array = array();

		$sql = "SELECT * FROM usuarios ORDER BY id DESC";
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
		$sql = "SELECT COUNT(*) AS total FROM usuarios";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['total'];
	}
}