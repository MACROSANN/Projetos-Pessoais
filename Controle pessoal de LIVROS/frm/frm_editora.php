<?php 
	$id_editora = isset($_GET["id"]) ? $_GET["id"]:	null;
	$acao 		= isset($_GET["acao"]) ? $_GET["acao"]:	"Inserir";
	
	if(isset($id_editora)){
		$editora = consultar("editora", "id_editora = ".$id_editora);
	}
	$txt_editora = isset($editora[0]["editora"]) ? $editora[0]["editora"]:null;
?>
			
	<span class="titulo"><i class="ico cadlivro"></i><b> <?php echo $acao ?> editora</b></span>
	<div class="base-form">
		<div class="base-colunas">
			<form method="post" action="opr/opr_editora.php">
				<label>
					<span>Editora</span>
					<input type="text" name="txt_editora" value="<?php echo $txt_editora ?>" />
					<input type="hidden" name="enviado" value="ok">
					<input type="hidden" name="acao" value="<?php echo $acao ?>">
					<input type="hidden" name="id" value="<?php echo $id_editora ?>">
				</label>
				<input type="submit" value="<?php echo $acao ?>" class="btn"/>
			</form>
		</div>
	</div>
