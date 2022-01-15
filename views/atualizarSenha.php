<div class="topo-titulo">
		<div class="titulo">
			Alterar Senha
		</div>
</div>
<form class="form-senha-usuario" method="POST">
	<div class="senha-usuario-input">
		<?php if(!empty($erro)): ?>
        	<div class="alerta"><?php echo $erro; ?></div>
		<?php endif; ?>
		<div class="senha-usuario-input-item">
			Insira a senha atual:<br>
			<input type="password" name="senha-antiga" required><br>
		</div>
		<div class="senha-usuario-input-item">
			Insira a nova senha:<br>
			<input type="password" name="senha-atual" required><br>
		</div>
		<div class="senha-usuario-input-item">
			Confirmar a nova senha:<br>
			<input type="password" name="senha-atual-confirm" required><br>
		</div>
		<div class="senha-usuario-input-item">
			<button>Atualizar</button><br>
		</div>
	</div>
</form>