<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
 	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css?ts=<?=time()?>" />
	<title>NotíciasBR</title>
</head>
<body>
	<div class="navbar">
		<div class="logo">
			<a href="<?php echo BASE_URL; ?>home">LOGO</a>
		</div>
		<ul class="nav-list">
			<li class="list-item"><a href="<?php echo BASE_URL; ?>home">HOME</a></li>
			<li class="list-item"><a href="<?php echo BASE_URL; ?>noticias">NOTÍCIAS</a></li>
			<li class="list-item"><a href="<?php echo BASE_URL; ?>contato">CONTATO</a></li>
			<li class="list-item"><a href="<?php echo BASE_URL; ?>login">LOGIN</a></li>
		</ul>
	</div>
	
	<?php $this->loadViewInTemplate($viewName, $viewData);?>

	<div class="rodape">
		<div class="end-tel">
			ENDEREÇO:<br>
			Av. Pres. Kennedy, 425 - Centro, São Gonçalo - RJ<br><br>
			TELEFONE<br>
			(21) 3611-7989<br>
		</div>
		<ul class="redes-sociais">
			<li class="redes-sociais-item"><img src="<?php echo BASE_URL; ?>assets/images/foto-rede"></li>
			<li class="redes-sociais-item"><img src="<?php echo BASE_URL; ?>assets/images/foto-rede"></li>
			<li class="redes-sociais-item"><img src="<?php echo BASE_URL; ?>assets/images/foto-rede"></li>
		</ul>
	</div>
</body>
</html>