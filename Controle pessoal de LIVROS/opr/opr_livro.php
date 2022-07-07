<?php 
    require_once("../config/CRUD.php"); 
    $id_livro   = isset($_POST["id"]) ? $_POST["id"]:	null;
    $acao       = isset($_POST["acao"]) ? $_POST["acao"]: "Inserir";

    $dados	= array(
                    "id_editora" => trim(filter_input(INPUT_POST, "txt_id_editora")),
                    "livro" => trim(filter_input(INPUT_POST, "txt_livro")),
                    "autor" => trim(filter_input(INPUT_POST, "txt_autor"))
    );
        
    $opr = false;
    $url_sucesso = URL_BASE."index.php?link=4";
    $url_erro = URL_BASE."index.php?link=5&acao=$acao&id=$id_livro";

    if($acao == "Inserir")
        $opr = inserir("livro", $dados);
    elseif($acao == "Editar")
        $opr = alterar("livro", $dados, "id_livro = ".$id_livro);
    elseif($acao == "Excluir")
        $opr = deletar("livro", "id_livro = ".$id_livro);

    if ($opr)
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_sucesso'>
                <script type = 'text/javascript'> alert('Operação realizada com sucesso') </script>";
    else
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_erro'>
                <script type = 'text/javascript'> alert('Operação NÃO realizada') </script>";
?>