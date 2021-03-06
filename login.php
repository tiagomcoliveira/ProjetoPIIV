<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>BackOffice - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/this-style.css">
    <link rel="shortcut icon" type="image/icon" href="imagens/favicon_esv.ico">
    <script src="Javascript/estilos.js"></script>
</head>

<body>
    <div class="fundo">
        <div class="espacologin">
            <legend>Iniciar Sessão</legend>
            <br>
            <form action="loginutilizador.php" method="POST">
            <div class="centrarcamposlogin">
                <input type="text" name="USERNAME" id="USERNAME" placeholder="utilizador" style="outline: none" required
                    class="camposlogin">
                <br>
                <input type="password" name="PALAVRA_PASS" id="PALAVRA_PASS" maxlength="10" placeholder="palavra passe"
                    style="outline: none" required class="camposlogin">
            <div class="btn_entrar"><button type="submit" id="btn_entrar">Entrar</button></div>
            </div>
            </form>
            
        </div>
        <br><br><br><br>
        <div class="relogio" id="datetime"></div>

    </div>
</body>

</html>