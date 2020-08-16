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
                    function descobriIdade($dtnasc){
                        $data = explode("-", $dtnasc);
                        
                        $anoNasc = $data[0];
                        $mesNasc = $data[1];
                        $diaNasc = $data[2];

                        $anoAtual = date("Y");
                        
                        return ($anoAtual - $anoNasc);
                    }

                    //Aluno
                    $nome = $_POST['nome'];
                    $dtnasc = $_POST['dtnasc'];
                    $sexo = $_POST['sexo'];
                    $idade = descobriIdade($dtnasc);
                    $matricula = $_POST['matricula'];
                    $curso = $_POST['curso'];

                    //Criação do Objeto
                    $aluno = array();
                    //Aluno 1
                    $aluno[0] = new aluno($matricula, $curso);
                    $aluno[0]->setNome($nome);
                    $aluno[0]->setIdade($idade);
                    $aluno[0]->setSexo($sexo);
                    $aluno[0]->apresentarAluno();


            ?>
            
    </div>
</body>
</html>

