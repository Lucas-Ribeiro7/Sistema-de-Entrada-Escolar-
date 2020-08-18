<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Sistema Educantil</title>
</head>
<body>
    
    <div class="borda">
        <?php
            require_once 'aluno.php';
            require_once 'funcionario.php';
            require_once 'visitante.php';
            require_once 'professor.php';
                $selecao = $_POST['selecao'];
                if($selecao == null){
                    echo "<p>[ERRO] Por favor escolha um dos itens na pagina anterior</p>";
                }else{
                    switch($selecao){
                        case "aluno" :
                            require_once 'formulario_aluno.php';
                        break;
                        case "professor" :
                            require_once 'formulario_professor.php';
                        break;
                        case "funcionario" :
                            require_once 'formulario_funcionario.php';
                        break;
                        case "visitante" :
                            require_once 'formulario_visitante.php';
                        break;
                        default :
                            echo "<p>[ERRO]</p>";
                    } 
                }
                
        ?>
        
    </div>

</body>
</html>
