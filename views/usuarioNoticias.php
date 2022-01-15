<div class="topo-titulo">
		<div class="titulo">
			Notícias Cadastradas
		</div>
</div>
<?php foreach($noticias as $noticiaitem): ?>
<div class="noticia-cadastrada">
	<div class="noticia-cadastrada-imagem">
		<img src="<?php echo BASE_URL; ?>assets/images/<?php echo $noticiaitem['foto']?>">
	</div>
	<div class="noticia-cadastrada-titulo">
		<div><strong><?php echo mb_strimwidth(utf8_encode($noticiaitem['titulo']), 0, 35, "..."); ?></strong><br></div>
	</div>
	<div class="noticia-cadastrada-conteudo">
		<div><?php echo mb_strimwidth(utf8_encode($noticiaitem['conteudo']), 0, 300, ' '); ?><a href=""> Ler mais...</a><br></div>
	</div>
	<div class="noticia-cadastrada-info">
		<div class="noticia-cadastrada-data">
			<div><?php echo "DATA: ".$noticiaitem['data']; ?><br></div>
		</div>
		<div class="noticia-cadastrada-id">
			<div><?php echo "ID: ".$noticiaitem['id']; ?><br></div>
		</div>
		<div class="noticia-cadastrada-botao">
			<button><a href="<?php echo BASE_URL; ?>painel/editarNoticia/<?php echo $noticiaitem['id'];?>">Editar</a></button>
			<button>Excluir</button>	
		</div>
	</div>
</div>
<br><br><br><br>
<?php endforeach; ?>

<div class="paginacao">
	<?php for($q=1;$q<=$paginas;$q++): ?>
		<?php if($paginaAtual == $q): ?>
			<a href="<?php echo BASE_URL; ?>painel/usuarioNoticias?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
		<?php else: ?>
			<a href="<?php echo BASE_URL; ?>painel/usuarioNoticias?p=<?php echo $q; ?>"><?php echo $q; ?></a>
		<?php endif; ?>
	<?php endfor; ?>
</div>