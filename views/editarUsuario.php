<div class="topo-titulo">
		<div class="titulo">
			Cadastrar Usuários
		</div>
</div>
<form class="form-cadastro-usuario" method="POST">
	<div class="cadastro-usuario-input">
		<div class="cadastro-usuario-input-item">
			Nome:<br>
			<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Sobrenome:<br>
			<input type="text" name="sobrenome" value="<?php echo $usuario['sobrenome']; ?>" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Email:<br>
			<input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Telefone:<br>
			<input type="text" name="telefone" value="<?php echo $usuario['tel']; ?>" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			<input type="radio" name="usuariotipo" value="1"> Administrador<br>
			<input type="radio" name="usuariotipo" value="2"> Colaborador<br>
			<input type="radio" name="usuariotipo" value="3"> Usuário<br>
		</div>
		<div class="cadastro-usuario-input-item">
			<button type="submit" name="enviar">Atualizar</button><br>
		</div>
	</div>
</form>