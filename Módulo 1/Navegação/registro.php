<!-- registro.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login === $_SESSION['nome'] && $senha === 'moobitech') {
    $horaAtual = new DateTimeImmutable();
    $horaFormatada = $horaAtual->format('H:i:s');

    echo "<h1>Bem-vindo, {$_SESSION['nome']}!</h1>";
    echo "<p>Hora atual: $horaFormatada</p>";

    $hora = (int)$horaAtual->format('H');
    if ($hora < 12) {
        echo "<p>Bom dia!</p>";
    } elseif ($hora < 18) {
        echo "<p>Boa tarde!</p>";
    } else {
        echo "<p>Boa noite!</p>";
    }
} else {
    echo "<p>Login ou senha incorretos. Tente novamente por favor!</p>";
    echo '<a href="curriculo.php">Voltar</a>';
}
?>
</body>
</html>
