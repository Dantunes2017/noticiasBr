<?php
class painelController extends controller {

	public function index() {
		$u = new usuarios();
		$u->verificarLogin();

		$dados = array();

		$this->loadTemplate('painel', $dados);
	}
	
	public function logout(){
        unset($_SESSION['login']);
        header("Location: ".BASE_URL."login");
        exit;
    }
}