<div class="topo-titulo">
		<div class="titulo">
			Editar Notícias
		</div>
</div>
<form class="form-cadastro-noticia" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
	<div class="conteudo-titulo"> 
		Título:<br>
		<input type="text" name="titulo" value="<?php echo utf8_encode($noticia['titulo']); ?>" required><br><br>

		Conteúdo<br>
		<textarea name="conteudo" rows="15" cols="60" required><?php echo utf8_encode($noticia['conteudo']); ?></textarea>
		<br><br>
		<input type="file" name="arquivo" value="Foto..."></input>
		<br><br>
		<button type="submit" name="enviar-foto">Enviar</button>
	</div>
</form>