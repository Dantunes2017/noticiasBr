<?php
class homeController extends controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index() {

		$dados = array();

		$noticias = new noticias();
		$limit = 9;

		$dados['noticias'] = $noticias->getNoticias(0, $limit);

		$u = new usuarios();
		if($u->verificarLogin() == false){
			$this->loadTemplate('home', $dados);
		}else{
			$this->loadTemplateLogado('home', $dados);
		}
	}
}