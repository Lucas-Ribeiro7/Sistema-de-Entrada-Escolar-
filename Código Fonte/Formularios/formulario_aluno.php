<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Educantil</title>
</head>
<body>
    <div class="borda">
        <h2 class="titulo">Cadastro de Aluno</h2>
        <fieldset> <legend>Formulario</legend>
            <form action="" method="POST">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <br>
                    <label>Data de Nascimento:</label>
                    <input type="date" name="dtnasc" id="dtnasc" value="dtnasc">
                    <br>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" id="sexo" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexo" id="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                    <br>
                    <label>Matricula:</label>
                    <input type="number" name="matricula" id="matricula" placeholder="Matricula">
                    <br>
                    <label>Curso:</label>
                    <input type="text" name="curso" id="curso" placeholder="Curso">
                    <br>
                    <br>
                    <input type="button" value="Enviar">
            </form>
        </fieldset>
    </div>
</body>
</html>