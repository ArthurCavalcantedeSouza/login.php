<?php
session_start();

?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Login do Administrador</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header><h2>Login do Administrador</h2></header>
        <main>
        <form action="processa_login.php" method = "post">
            <label for="nome">Nome:</label>
            <input type="text" id = "nome" name="nome" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Entrar">
        </form>
        </main>
    </body>
</html>