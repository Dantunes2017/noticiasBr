<?php
class homeController extends controller {

	public function index() {
		$dados = array(
			'noticias' => array()
		);

		$noticias = new noticias();
		$dados['noticias'] = $noticias->getNoticias(9);

		$this->loadTemplate('home', $dados);
	}

}