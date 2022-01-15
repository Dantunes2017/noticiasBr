<?php
class contatoController extends controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index() {

		$dados = array();

		$u = new usuarios();
		if($u->verificarLogin() == false){
			$this->loadTemplate('contato', $dados);
		}else{
			$this->loadTemplateLogado('contato', $dados);
		}
	}

}