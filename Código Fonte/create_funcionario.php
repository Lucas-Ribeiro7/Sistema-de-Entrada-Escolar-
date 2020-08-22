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
                require_once 'funcionario.php';
                    function descobriIdadeFuncionario($dtnasc){
                        $data = explode("-", $dtnasc);
                        
                        $anoNasc = $data[0];
                        $mesNasc = $data[1];
                        $diaNasc = $data[2];

                        $anoAtual = date("Y");
                        
                        return ($anoAtual - $anoNasc);
                    }

                    //Funcionario
                    $nome = $_POST['nome'];
                    $nome = strtolower($nome);
                    $nome = ucwords($nome);
                    $dtnasc = $_POST['dtnasc'];
                    $sexo = $_POST['sexo'];
                    $idade = descobriIdadeFuncionario($dtnasc);
                    $setor = $_POST['setor'];
                    $trablhando = true;
                    

                    //funcionario
                    $funcionario = new funcionario($setor, $trablhando);
                    $funcionario->setNome($nome);
                    $funcionario->setIdade($idade);
                    $funcionario->setSexo($sexo);
                    $funcionario->apresentarFuncionario();


            ?>
            <div class="voltar">
            <a href="formulario_funcionario.php"><button>Novo Cadastro</button></a>
            </div>
    </div>
</body>
</html>