<div class="titulo">
        BEM VINDO <?php echo strtoupper($viewData['usuario_nome']); ?>
    </div>
        <form class="form-usuario-logado">
        <div class="usuario-logado-input">
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/atualizarDados">Atualizar Dados</a><br>
            </div>
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/atualizarSenha">Atualizar Senha</a><br>
            </div>
            -------------------------------------------
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/cadastroNoticia">Cadastrar Notícia</a><br>
            </div>
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/usuarioNoticias">Editar/Excluir Notícia</a><br>
            </div>
            -------------------------------------------
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/">Cadastrar Usuário</a><br>
            </div>
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/listarUsuarios">Editar/Excluir Usuário</a><br>
            </div>
            -------------------------------------------     
            <div class="usuario-logado-input-item">
                <a href="<?php echo BASE_URL; ?>painel/logout">Sair</a>
            </div>
        </div>
    </form>
