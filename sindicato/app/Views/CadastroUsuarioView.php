<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>
</head>
<body>
<h1>Cadastrar Usuário</h1>
<form method="POST" action="?action=cadastrar">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <select name="tipo">
        <option value="comum">Comum</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>