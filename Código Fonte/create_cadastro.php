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

$name = $_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$sexo = $_POST['sexo'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];
$idade = (date("Y") - $dtnasc);

echo "<p>Aluno com nome $name, com idade $idade</p>";




?>
</div>
</body>
</html>

