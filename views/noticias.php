<div class="topo-titulo">
		<div class="titulo">
			Notícias
		</div>
</div>
<div class="galeria-noticias-2">
	<?php foreach($noticias as $noticiaitem): ?>
		<div class="noticia-2">
			<img class="img-noticias" src="<?php echo BASE_URL; ?>assets/images/<?php echo $noticiaitem['foto']?>"><br>
			<div class="img-titulo-2"><strong><?php echo mb_strimwidth(utf8_encode($noticiaitem['titulo']), 0, 35, "..."); ?></strong><br></div>
			<div class="artigo-2"><?php echo mb_strimwidth(utf8_encode($noticiaitem['conteudo']), 0, 300, ' '); ?><a href=""> Ler mais...</a><br></div>
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