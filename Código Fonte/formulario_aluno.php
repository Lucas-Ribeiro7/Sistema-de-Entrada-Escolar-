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
        <h2 class="titulo">Cadastro de Aluno</h2>
        <fieldset> <legend> <strong>Formulário</strong> </legend>
            <form action="create_aluno.php" method="POST">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <!-- Size pode aumentar a largura os input, para assim coloque-o um nome completo !-->
                    <br>
                    <br>
                    <label>Data de Nascimento:</label>
                    <input type="date" name="dtnasc" id="dtnasc" required>
                    <br>
                    <br>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" id="sexo" value="Masculino" required>  
                    <label for="Masculino">Masculino</label>
                    <input type="radio" name="sexo" id="sexo" value="Feminino" required>
                    <label for="Feminino">Feminino</label>
                    <br>
                    <br>
                    <label>Matricula:</label>
                    <input type="number" name="matricula" id="matricula" placeholder="Matricula" required>
                    <br>
                    <br>
                    <label>Curso:</label>
                    <input type="text" name="curso" id="curso" placeholder="Curso" required>
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
            </form>
        </fieldset>
        <br>
        <div class="voltar">
            <a href="index.php"><img src="Imagens/voltar1.png" width="60"></a>
        </div>
    </div> 
</body>
</html>