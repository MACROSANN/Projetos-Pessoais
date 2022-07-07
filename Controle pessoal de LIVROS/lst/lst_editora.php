	<?php
		$editora = consultar("editora",null,"id_editora, editora"," ORDER BY editora ASC");
		$txt_busca = isset($_POST["txt_busca"]) ?  $_POST["txt_busca"] : null;
		if(isset($txt_busca)){
			$editora = selecionar("SELECT * FROM editora WHERE editora LIKE '%$txt_busca%' ORDER BY editora ASC");
		}
	?>
	<span class="titulo"><i class="ico lista"></i> <b>Lista de editoras</b></span>
	<div class="base-lista">
		<div class="busca">
			<form action="" method="post">
				<input type="text" name="txt_busca" placeholder="Buscar">
				<input type="submit" name="" value="Busca" class="btn">
			</form>
		</div>
		
		<a href="index.php?link=3" class="btn cad">Novo Cadastro</a>
		
		<div class="scroll">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">Id</th>
						<th align="left">Editora</th>
						<th width="18%" colspan="2">Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php
					if($editora){
						foreach($editora as $linha){
				?>
						<tr>
							<td> <?php echo $linha["id_editora"] ?>	</td>
							<td> <?php echo $linha["editora"] ?>	</td>
							<td align="center"><a href=" <?php echo "index.php?link=3&acao=Editar&id=". $linha["id_editora"] ?>" class="ico editar">Editar</a></td>
							<td align="center"><a href=" <?php echo "index.php?link=3&acao=Excluir&id=". $linha["id_editora"] ?>" class="ico excluir">Excluir</a></td>
						</tr>
				<?php }
					}else{
						echo "Não há editora cadastrada!";
				} 	?>
				</tbody>
			</table>
		</div>
	</div>
