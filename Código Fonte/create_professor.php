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
                require_once 'professor.php';
                    function descobriIdade($dtnasc){
                        $data = explode("-", $dtnasc);
                        
                        $anoNasc = $data;
                        $mesNasc = $data[1];
                        $diaNasc = $data[2];

                        $anoAtual = date("Y");
                        
                        return ($anoAtual - $anoNasc);
                    }

                    //Professor
                    $nome = $_POST['nome'];
                    $dtnasc = $_POST['dtnasc'];
                    $sexo = $_POST['sexo'];
                    $idade = descobriIdade($dtnasc);
                    $especialidade = $_POST['especialidade'];
                    $salario = $_POST['salario'];

                    
                    //Professor
                    $professor = new professor($especialidade, $salario);
                    $professor->setNome($nome);
                    $professor->setIdade($idade);
                    $professor->setSexo($sexo);
                    $professor->apresentarProfessor();


            ?>
            <div class="voltar">
            <a href="formulario_professor.php"><button>Novo Cadastro</button></a>
            </div>
    </div>
</body>
</html>
