<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Formulário de Cadastro</title>
    </head>
    <body>
        <h1>Dados do usuário:</h1>
        <form action="gravar_usuario.php" method="post">
            <label for="id">ID:</label>
            <input id="id" type="text" name="id" value="" /><br>
            <label for="nome">Nome:</label>
            <input id="nome" type="text" name="nome" value="" /><br>
            <label for="usuario">Usuário:</label>
            <input id="usuario" type="text" name="usuario" value="" /><br>
            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha" value="" /><br>

            <input type="submit" name="enviar" value="Enviar dados" />
        </form>
    </body>
</html>
