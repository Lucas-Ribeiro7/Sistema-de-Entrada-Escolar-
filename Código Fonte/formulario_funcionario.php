<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Educantil</title>
</head>
<body>
    <div class="borda">
        <h2 class="titulo">Cadastro de Funcionário</h2>
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
                    <label>Setor:</label> <br>
                    <input type="radio" name="setor" value="Secretaria">
                    <label for="Secretaria">Secretaria</label> <br>
                    <input type="radio" name="setor" value="Portaria">
                    <label for="Portaria">Portaria</label> <br>
                    <input type="radio" name="setor" value="Limpeza">
                    <label for="Limpeza">Limpeza</label> <br>
                    <input type="radio" name="setor" value="Cantina">
                    <label for="Cantina">Cantina</label>
                    <br>
                    <br>
                    <input type="button" value="Enviar">
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