<?php
class noticiasController extends controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index() {

		$dados = array();

		$noticias = new noticias();
		$limit = 4;

		$total = $noticias->getTotal();
        $dados['paginas'] = ceil($total/$limit);

        $dados['paginaAtual'] = 1;
        if(!empty($_GET['p'])) {
        	$dados['paginaAtual'] = intval($_GET['p']);
        }
        $offset = ($dados['paginaAtual'] * $limit) - $limit;

		$dados['noticias'] = $noticias->getNoticias($offset, $limit);
		
		$u = new usuarios();
		if($u->verificarLogin() == false){
			$this->loadTemplate('noticias', $dados);
		}else{
			$this->loadTemplateLogado('noticias', $dados);
		}
	}
}