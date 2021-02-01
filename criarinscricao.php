<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>BackOffice - Criar Inscrição</title>
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
    <link rel="stylesheet" type="text/css" href="../PI4-BackOffice/CSS/this-style.css">
    <link rel="shortcut icon" type="image/icon" href="imagens/favicon_esv.ico">
    <script src="../PI4-BackOffice/Javascript/estilos.js"></script>
</head>

<body>
    <div class="fundo">

        <!--NAVBAR AQUI-->

        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="primerpage.html"><img src="imagens/Logotipo.png"
                        style="height: 5vh"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown toggle" href="noticias.html" id="navbarDropdown"
                                role="button" data-toggle="dropdown">Notícias</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="adicionarnoticia.html">Adicionar Notícia</a>
                                <a class="dropdown-item" href="lista-noticias.html">Lista de Notícias</a>
                                <a class="dropdown-item" href="#">Rascunhos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown toggle" href="Clubes.html" id="navbarDropdown" role="button"
                                data-toggle="dropdown">Clubes</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="adicionarclube.html">Adicionar Clube</a>
                                <a class="dropdown-item" href="lista-clubes.html">Lista de Clubes</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown toggle" href="inscricoes.html" id="navbarDropdown"
                                role="button" data-toggle="dropdown">Inscrições</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="criarinscricao.html">Criar Inscrição</a>
                                <a class="dropdown-item" href="solicitacoes.html">Solicitações</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown toggle" href="tipo.html" id="navbarDropdown" role="button"
                                data-toggle="dropdown">Tipo</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lista-alunos.html">Alunos</a>
                                <a class="dropdown-item" href="lista-professores.html">Professores</a>
                                <a class="dropdown-item" href="lista-enc-educ.html">Encarregados de Educação</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="espacoinscricao">
            <legend>Criar Inscrição</legend>
            <br>
            <div class="boxclube">
                <select style="-webkit-appearance: none;" required>
                    <option disabled selected hidden>clube</option>
                    <option>artes</option>
                    <option>música</option>
                    <option>teatro</option>
                    <option>futsal</option>
                </select>
            </div>
            <br><br>
            <div class="boxturma">
                <select style="-webkit-appearance: none;" required>
                    <option disabled selected hidden>turma</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                </select>
            </div>
            <div class="boxano">
                <select style="-webkit-appearance: none;" required>
                    <option disabled selected hidden>ano</option>
                    <option>7º</option>
                    <option>8º</option>
                    <option>9º</option>
                </select>
            </div>
            <br><br>

            <div class="boxnomealuno">
                <select style="-webkit-appearance: none;"" required>
                    <option disabled selected hidden>aluno</option>
                    <option>Marcelo Caetano Veloso Dias</option>
                    <option>Agrípio do Vale Pereira</option>
                    <option>Ana Margarida Esteves Correia</option>
                    <option>Susana Herdade do Conde</option>
                </select>
            </div>
            <br><br>
            <input id=" btnlogin" type="submit" value="Inscrever" class="btn_criarins" style="outline: none">
        </div>
        <br><br><br><br>
        <div class="relogio" id="datetime"></div>
    </div>

</body>

</html>