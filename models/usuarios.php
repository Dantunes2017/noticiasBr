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
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function verificarUsuario(){
		if(!isset($_SESSION['login']) || ( isset($_SESSION['login']) && empty($_SESSION['login']))){
			return false;
		}else{
			return true;
		}
	}

	
}