<?php 
    require_once("../config/CRUD.php"); 
    $id_editora = isset($_POST["id"]) ? $_POST["id"]:	null;
    $acao 		= isset($_POST["acao"]) ? $_POST["acao"]:	"Inserir";

    $dados	= array(
                "editora" => trim(filter_input(INPUT_POST, "txt_editora"))
    );

    $opr = false;
    $url_sucesso = URL_BASE."index.php?link=2";
    $url_erro = URL_BASE."index.php?link=3&acao=$acao&id=$id_editora";

    if($acao == "Inserir")
        $opr = inserir("editora", $dados);
    elseif($acao == "Editar")
        $opr = alterar("editora", $dados, "id_editora = ".$id_editora);
    elseif($acao == "Excluir")
        $opr = deletar("editora", "id_editora = ".$id_editora);

    if ($opr)
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_sucesso'>
                <script type = 'text/javascript'> alert('Operação realizada com sucesso') </script>";
    else
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_erro'>
                <script type = 'text/javascript'> alert('Operação NÃO realizada') </script>";
?>