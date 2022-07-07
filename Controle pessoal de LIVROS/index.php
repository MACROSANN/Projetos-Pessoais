<?php 
	require("config/CRUD.php"); 
?>

<doctype html>
<html>
	<head>
		<title>Plataforma EAD</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<script type="text/javascript" src="js/jquety-min.js" ></script>
		<script type="text/javascript" src="js/js.js" ></script>
	</head>
<body>
	<div class="site">
		<div class="conteudo">

			<?php include "menu.php" ?>

			<div class="base-meio">

				<?php include "cabecalho.php" ?>

				<div class="base-home">

					<?php
						@$link 	= filter_input(INPUT_GET, "link");
						$pag[1]	= "home.php";
						$pag[2]	= "lst/lst_editora.php";
						$pag[3]	= "frm/frm_editora.php";
						$pag[4]	= "lst/lst_livro.php";
						$pag[5]	= "frm/frm_livro.php";
			
						if(!empty($link)){
							if(file_exists($pag[$link])){
								include $pag[$link];
							}else{
								include "home.php";
							}
						}else{
							include "home.php";
						}
					?>

				</div>
			</div>
			
			<?php include "rodape.php" ?>

		</div>
	</div>
</body>
</html>