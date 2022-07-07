	<?php
		$livro = consultar("livro",null,"id_livro, id_editora, livro, autor, data_livro"," ORDER BY livro ASC");
		$txt_busca = isset($_POST["txt_busca"]) ?  $_POST["txt_busca"] : null;
		if(isset($txt_busca)){
			$livro = selecionar("SELECT * FROM livro WHERE livro LIKE '%$txt_busca%' ORDER BY livro ASC");
		}
	?>
	<span class="titulo"><i class="ico lista"></i> <b>Lista de Livros</b></span>
	<div class="base-lista">
		<div class="busca">
			<form action="" method="post">
				<input type="text" name="txt_busca" placeholder="Buscar">
				<input type="submit" name="" value="Busca" class="btn">
			</form>
		</div>
		
		<a href="index.php?link=5" class="btn cad">Novo Cadastro</a>
		
		<div class="scroll">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">Id</th>
						<th align="left">Livro</th>
						<th align="left">Autor</th>
						<th width="18%" colspan="2">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($livro){
							foreach($livro as $linha){
					?>
						<tr>
							<td> <?php echo $linha["id_livro"] ?> </td>
							<td> <?php echo $linha["livro"] ?>	</td>
							<td> <?php echo $linha["autor"] ?>	</td>
							<td align="center"><a href=" <?php echo "index.php?link=5&acao=Editar&id=". $linha["id_livro"] ?>" class="ico editar">Editar</a></td>
							<td align="center"><a href=" <?php echo "index.php?link=5&acao=Excluir&id=". $linha["id_livro"] ?>" class="ico excluir">Excluir</a></td>
						</tr>
					<?php }
						}else{
							echo "Não há livro cadastrado!";
					} 	?>
				</tbody>
			</table>
		</div>
	</div>

