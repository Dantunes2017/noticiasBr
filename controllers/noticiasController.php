<?php
class noticiasController extends controller {

	public function index() {
		$dados = array();

		$this->loadTemplate('noticias', $dados);
	}

}