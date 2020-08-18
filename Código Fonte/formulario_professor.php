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
        <h2 class="titulo">Cadastro de Professores</h2>
        <fieldset> <legend> <strong>Formulário</strong> </legend>
            <form action="" method="POST">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <br>
                    <br>
                    <label>Data de Nascimento:</label>
                    <input type="date" name="dtnasc" id="dtnasc" value="dtnasc">
                    <br>
                    <br>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" id="sexo" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexo" id="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                    <br>
                    <br>
                    <label>Especialidade:</label>
                    <input type="text" name="especialidade" placeholder="Especialidade">
                    <br>
                    <br>
                    <label>Salário:</label>
                    <input type="number" name="salario" placeholder="Salário" min="2.500" max="7.000">
                    <br>
                    <br>
                    <input type="button" value="Enviar">
            </form>
        </fieldset>    
    </div>
</body>
</html>