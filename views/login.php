<div class="topo-titulo">
		<div class="titulo">
			Login
		</div>
</div>

<form class="form-login" method="POST">

	<div class="login-input">
		<?php if(!empty($erro)): ?>
        	<div class="alerta"><?php echo $erro; ?></div>
		<?php endif; ?>
		<div class="login-input-item">
			Email:
			<input type="email" name="email"><br>
		</div>
		<div class="login-input-item">
			Senha:
			<input type="password" name="senha"><br>
		</div>
		<div class="login-input-item">
			<button type="submit" >Enviar</button><br>
		</div>
	</div>
</form>