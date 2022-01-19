<div class="topo-titulo">
		<div class="titulo">
			Cadastrar Usuários
		</div>
</div>
<form class="form-cadastro-usuario" method="POST">
	<div class="cadastro-usuario-input">
		<div class="cadastro-usuario-input-item">
			Nome:<br>
			<input type="text" name="nome" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Sobrenome:<br>
			<input type="text" name="sobrenome" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Email:<br>
			<input type="email" name="email" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Telefone:<br>
			<input type="text" name="telefone" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			Senha:<br>
			<input type="password" name="senha" required><br>
		</div>
		<div class="cadastro-usuario-input-item">
			<input type="radio" name="usuariotipo" value="1"> Administrador<br>
			<input type="radio" name="usuariotipo" value="2"> Colaborador<br>
			<input type="radio" name="usuariotipo" value="3" checked> Usuário<br>
		</div>
		<div class="cadastro-usuario-input-item">
			<button type="submit" name="enviar">Atualizar</button><br>
		</div>
	</div>
</form>