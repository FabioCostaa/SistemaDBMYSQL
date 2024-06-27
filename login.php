<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"><link>
</head>
<body>

    <a href="home.php">Voltar</a>

    <div class="tela-login">
        <fieldset>
            <legend><b>Login</b></legend>
        <form action="testLogin.php" method="post">
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </fieldset>
    </div>
</body>
</html>