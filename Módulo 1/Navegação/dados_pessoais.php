
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados Pessoais</title>
</head>
<body>
<?php
$nome = htmlspecialchars($_GET['nome']);
echo "<h1>Olá, $nome!</h1>";
?>
<form action="curriculo.php" method="POST">
    <label for="idade">Insira sua idade por favor:<br></label>
    <input type="text" id="idade" name="idade" required placeholder="Digite sua idade"><br>

    <label for="email">Insira seu e-mail por favor:<br></label>
    <input type="email" id="email" name="email" required placeholder="email@exemplo.com"><br>

    <label for="telefone">Insira seu telefone por favor:<br></label>
    <input type="tel" id="telefone" name="telefone" required placeholder="(XX) XXXX-XXXX"><br>

    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <button type="submit">Avançar</button>
</form>
</body>
</html>
