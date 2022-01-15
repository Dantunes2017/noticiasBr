<?php
class painelController extends controller {
   	
   	public function __construct(){
		parent::__construct();
	}	
	
	public function index() {
		$u = new usuarios();
		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

		$dados = array();
        $dados['usuario_nome'] = $u->getNome($_SESSION['login']);

		$this->loadTemplateLogado('painel', $dados);
	}
	
	public function atualizarDados(){
		$u = new usuarios();
		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

		$dados = array();
        $dados['usuario_nome'] = $u->getNome($_SESSION['login']);

        if( (isset($_POST['nome']) && !empty($_POST['nome'])) || (isset($_POST['sobrenome']) && !empty($_POST['sobrenome'])) ||(isset($_POST['telefone']) && !empty($_POST['telefone']))){
            
            $nome = addslashes($_POST['nome']);
            $sobreNome = addslashes($_POST['sobrenome']);
            $tel = addslashes($_POST['telefone']);

            $u->update($_SESSION['login'], $nome, $sobreNome, $tel);
            header("Location: ".BASE_URL."painel");
            exit;
        }

		$this->loadTemplateLogado('atualizarDados', $dados);
	}

	public function atualizarSenha(){
		$u = new usuarios();
		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

		$dados = array();
        $dados['usuario_nome'] = $u->getNome($_SESSION['login']);

        if((isset($_POST['senha-atual'])) && (!empty($_POST['senha-atual']))){
            
            $senha = md5($_POST['senha-antiga']);
            $senha = addslashes($senha);

            if(($u->verificarSenha($_SESSION['login'], $senha) == false) || ($_POST['senha-atual'] != $_POST['senha-atual-confirm'])) {
				$dados['erro'] = "sua senha está incorreta e/ou a confirmação não está igual a nova senha";
			}else{
				$senha = md5($_POST['senha-atual']);
            	$senha = addslashes($senha);

				$u->updatePass($_SESSION['login'], $senha);
	            header("Location: ".BASE_URL."painel");
	            exit;
			}
        }

		$this->loadTemplateLogado('atualizarSenha', $dados);
	}

	public function cadastroNoticia(){
		$u = new usuarios();
		$n = new noticias();

		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

		$dados = array();

  		//if(isset($_POST['enviar-foto'])){
		// 	$formatosPermitidos = ["png"];
		// 	$extensão = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

		// 	if(in_array($extensão, $formatosPermitidos)){
		// 		$pasta = BASE_URL."assets/images/";
		// 		$temporario = $_FILES['arquivo']['tmp_name'];
		// 		$novoNome = uniqid().".$extensão";
		// 		$pasta = $_SERVER['DOCUMENT_ROOT']."/noticiasbr/assets/images/";

		// 		if(move_uploaded_file($temporario, $pasta.$novoNome)){
		// 			echo "Upload feito com sucesso.";
		// 		}else{
		// 			echo "Erro, não foi possível fazer o upload";
		// 		}

		// 	}else{
		// 		echo "A extensão do arquivo tem que ser em .PNG";
		// 	}
		// }

        if( (isset($_POST['titulo']) && !empty($_POST['titulo'])) || (isset($_POST['conteudo']) && !empty($_POST['conteudo']))){
            
            $titulo = addslashes(utf8_decode($_POST['titulo']));
            $conteudo = addslashes(utf8_decode($_POST['conteudo']));
            $foto = addslashes("img-teste.png");

            // echo "<br>".$titulo." - ".$conteudo." - ".$foto."<br>";
            // echo $pasta;
            // exit;
            

            $n->cadastrarNoticia($_SESSION['login'], $titulo, $conteudo, $foto);
            header("Location: ".BASE_URL."painel");
            exit;
        }

		$this->loadTemplateLogado('cadastroNoticia', $dados);
	}

	public function editarNoticia(){
		$u = new usuarios();
		$n = new noticias();

		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

		$noticiaId = explode('/', $_GET['url']);
        $noticiaId = $noticiaId[2];

		if($n->verificarNoticiaUsuario($noticiaId) == false){
			header("Location: ".BASE_URL."painel/usuarioNoticias");
        	exit;
		}

		$dados = array();
		$dados['noticia'] = $n->getNoticia($noticiaId);

		if( (isset($_POST['titulo']) && !empty($_POST['titulo'])) || (isset($_POST['conteudo']) && !empty($_POST['conteudo']))){
            
            $titulo = addslashes(utf8_decode($_POST['titulo']));
            $conteudo = addslashes(utf8_decode($_POST['conteudo']));
            $foto = addslashes("img-teste.png");         

            $n->editarNoticia($noticiaId, $titulo, $conteudo, $foto);
            header("Location: ".BASE_URL."painel/usuarioNoticias");
            exit;
        }

		$this->loadTemplateLogado('editarNoticia', $dados);
	}

	public function usuarioNoticias(){
		$u = new usuarios();
		$n = new noticias();

		if($u->verificarLogin() == false){
			header("Location: ".BASE_URL."login");
        	exit;
		}

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
		$dados['noticias'] = $noticias->getNoticiasUsuario($offset, $limit, $_SESSION['login']);



        $this->loadTemplateLogado('usuarioNoticias', $dados);
	}

	public function logout(){
        unset($_SESSION['login']);
        header("Location: ".BASE_URL."login");
        exit;
    }
}