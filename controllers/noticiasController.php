<?php
class noticiasController extends controller {

	public function index() {
		$dados = array(
			'noticias' => array()
		);

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
		
		$this->loadTemplate('noticias', $dados);
	}
}