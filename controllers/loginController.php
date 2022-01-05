<?php
class loginController extends controller{
    public function index(){

        $dados = array();

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
        
            $u = new usuarios();
            $dados['erro'] = $u->logar($email, $senha);
        }

        $this->loadTemplate('login', $dados);
    }
}