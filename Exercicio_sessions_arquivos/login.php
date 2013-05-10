<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Boa sorte com seu login:</h1>
        <form action="verificar.php" method="post">
            <label for="usuario">Usuário:</label>
            <input id="usuario" type="text" name="usuario" value="" /><br>
            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha" value="" /><br>

            <input type="submit" name="login" value="Enviar dados" />
        </form>
        <p><a href=".">Voltar</a></p>
    </body>
</html>
