	<?php
		$livro = consultar("livro",null,"id_livro, id_editora, livro, autor, data_livro"," ORDER BY data_livro DESC LIMIT 6");
	?>
	<div class="caixa-home">
		<?php $TLivros = total("SELECT DISTINCT(livro) FROM livro")?>
		<div class="col3"><i class="icone icon1"></i><span><?php echo "$TLivros"?></span><small>Livros</small></div>
		<?php $TAutor = total("SELECT DISTINCT(autor) FROM livro")?>
		<div class="col3"><i class="icone icon2"></i><span><?php echo "$TAutor"?></span><small>Autor</small></div>
		<?php $TEditora = total("SELECT DISTINCT(editora) FROM editora")?>
		<div class="col3"><i class="icone icon3"></i><span><?php echo "$TEditora"?></span><small>Editora</small></div>

		<div class="col2">
			<span class="titulo1">Últimos livros cadastrados</span>
			<ul>
				<?php
					if($livro){
						foreach($livro as $linha){
				?>
				<li> <?php echo $linha["livro"] ?>	<small> <?php echo date('d/m/Y', strtotime($linha["data_livro"])) ?>	</small></li>
				<?php }
					}else{
						echo "Não há livro cadastrado!";
				} 	?>
			</ul>
			<a href="index.php?link=4" class="btn">ver mais</a>
		</div>
		
		<div class="col2">
			<span class="titulo1">Últimos autores cadastrados</span>
			<ul>
				<?php
					if($livro){
						foreach($livro as $linha){
				?>
				<li> <?php echo $linha["autor"] ?>	<small> <?php echo date('d/m/Y', strtotime($linha["data_livro"])) ?>	</small></li>
				<?php }
					}else{
						echo "Não há livro cadastrado!";
				} 	?>
			</ul>
			<a href="index.php?link=4" class="btn">ver mais</a>
		</div>
		
	</div>
