<div class="titulo">
	Últimas Notícias
</div>

<div class="galeria-noticias">
	<?php foreach($noticias as $noticiaitem): ?>
		<div class="noticia">
			<img src="<?php echo BASE_URL; ?>assets/images/<?php echo $noticiaitem['foto']?>"><br>
			<div class="img-titulo"><strong><?php echo mb_strimwidth(utf8_encode($noticiaitem['titulo']), 0, 35, "..."); ?></strong><br></div>
		</div>
	<?php endforeach; ?>
</div>