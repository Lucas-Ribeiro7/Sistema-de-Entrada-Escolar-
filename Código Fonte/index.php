<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
    <title>Sistema Educantil</title>
</head>

<body>

    <div class="borda">
        <h2 class="titulo">Sistema Educantil</h2>
            <form method="POST" action="selecao.php" class="inicial">
                <label><strong>Por favor informe a sua posição neste momento:</strong></label>
                <br>
                <br>
                <input type="radio" name="selecao" id="aluno" value="aluno" required>
                <label for="aluno">Aluno</label>
                <input type="radio" name="selecao" id="professor" value="professor">
                <label for="professor">Professor</label>
                <input type="radio" name="selecao" id="funcionario" value="funcionario">
                <label for="funcionario">Funcionário</label>
                <input type="radio" name="selecao" id="visitante" value="visitante">
                <label for="visitante">Visitante</label>
                <br>
                <br>
                <input type="submit" value="Enviar">
            </form>        
    </div>


</body>

</html>