<?php 
	$id_livro = isset($_GET["id"]) ? $_GET["id"]:	null;
	$acao 		= isset($_GET["acao"]) ? $_GET["acao"]:	"Inserir";
	
	if(isset($id_livro)){
		$livro = consultar("livro", "id_livro = ".$id_livro);
	}
	$id_editora = isset($livro[0]["id_editora"]) ? $livro[0]["id_editora"]:null;
	$txt_livro = isset($livro[0]["livro"]) ? $livro[0]["livro"]:null;
	$txt_autor = isset($livro[0]["autor"]) ? $livro[0]["autor"]:null;
?>
	<span class="titulo"><i class="ico cadlivro"></i><b> <?php echo $acao ?> Livros</b></span>
	<div class="base-form">
		<div class="base-colunas">
			<form method="post" action="opr/opr_livro.php">
				<label>
					<span>Livro:</span>
					<input type="text" name="txt_livro" value="<?php echo $txt_livro ?>" />
				</label>
				<label>
					<span>Editora</span>
						<select name="txt_id_editora">
						<?php
							$editoras = consultar("editora");
							foreach($editoras as $editora){
								$idEditora = $editora["id_editora"];
								$txEditora = $editora["editora"];
								
								$selecionado = ($idEditora == $id_editora) ? "selected" : "";
								echo "<option value='$idEditora' $selecionado> $txEditora <?option>";
							}
						?>
						</select>
				</label>
				<label>
					<span>Autor:</span>
					<input type="text" name="txt_autor" value="<?php echo $txt_autor ?>" />
				</label>
				<input type="hidden" name="enviado" value="ok">
				<input type="hidden" name="acao" value="<?php echo $acao ?>">
				<input type="hidden" name="id" value="<?php echo $id_livro ?>">
				<input type="submit" value="<?php echo $acao ?>" class="btn"/>
			</form>
		</div>
	</div>
