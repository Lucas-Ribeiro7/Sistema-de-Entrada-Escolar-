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
                            echo "<p>Aluno</p>";
                            //$aluno = new aluno();
                        break;
                        case "professor" :
                            echo "<p>Professor</p>";
                            //$professor = new professor();
                        break;
                        case "funcionario" :
                            echo "<p>Funcionario</p>";
                            //$funcionario = new funcionario();
                        break;
                        case "visitante" :
                            echo "<p>Visitante</p>";
                            //$visitante = new visitante();
                        break;
                        default :
                            echo "<p>[ERRO]</p>";
                    } 
                }
                
        ?>
        <div class="voltar">
            <a href="index.html"><img src="imagens/voltar1.png" width="60"></a>
        </div>
        
    </div>

</body>
</html>
