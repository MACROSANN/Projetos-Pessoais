<!doctype html>
<html>
    <head>
            <title>Plataforma de Treinamentos EAD</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" type="text/css" href="css/grade.css">
            <link rel="stylesheet" type="text/css" href="css/m-style.css">

            <meta name="wiewport" content="width=device-width, initial-scale=1">

            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="js/js.js"></script>
    </head>
    <body>
        <!--Cabeçalho-->
        <?php include "cabecalho.php"?>

        <div class="site">
            <!--Menu-->
            <?php include "menu.php"?>

            <div class="base-geral">
                <!--Home-->
                <?php 
                    $link = isset($_GET["link"]) ? $_GET["link"] : 0;
                    $pag = ["home.php","meus_modulos.php","modulo.php","fluxo.php","perfil.php","comentario.php"];
                    if(file_exists($pag[$link])){
                        include $pag[$link];
                    }else{
                        include "404.php";
                    }
                ?>

                <!--Rodapé-->
                <?php include "rodape.php"?>
                
            </div>
        </div>
    </body>
</html>
