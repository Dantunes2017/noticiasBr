<div class="titulo">
	Usuários Cadastrados
</div>
<div class="galeria-usuarios">
	<?php foreach($usuarios as $usuario): ?>
		<div class="usuarios-cadastrados">
			<div class="usuarios-cadastrados-info">
				<strong>Nome: </strong><?php echo utf8_encode($usuario['nome']." ".$usuario['sobrenome']); ?><br><br>
				<strong>Email: </strong><?php echo $usuario['email']; ?><br><br>
				<strong>Tel: </strong><?php echo $usuario['tel']; ?><br><br>
				<strong class="<?php echo $usuario['status'];?>">Status: <?php echo strtoupper($usuario['status']);?></strong><br><br>		
			</div>
			<div class="usuarios-cadastrados-botao">
				<a href="<?php echo BASE_URL; ?>painel/editarUsuario/<?php echo $usuario['id'];?>"><button>Editar</button></a>
				<a href="<?php echo BASE_URL; ?>painel/alterarSenhaUsuario/<?php echo $usuario['id'];?>"><button>Alterar Senha</button></a>
				<a href="<?php echo BASE_URL; ?>painel/alterarStatusUsuario/<?php echo $usuario['id'];?>"><button>Ativar/Inativar</button></a>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<div class="paginacao">
	<?php for($q=1;$q<=$paginas;$q++): ?>
		<?php if($paginaAtual == $q): ?>
			<a href="<?php echo BASE_URL; ?>/noticias?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
		<?php else: ?>
			<a href="<?php echo BASE_URL; ?>/noticias?p=<?php echo $q; ?>"><?php echo $q; ?></a>
		<?php endif; ?>
	<?php endfor; ?>
</div>