<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>BackOffice - Solicitações - Dados do Aluno</title>
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

        <div class="espacosolicalunos">
            <div class="btn_voltar" onclick="Voltar()">&#10096; Voltar</div>
            <div class="btn_edit" onclick="Voltar()"><img src="imagens/Inscricoes.png"
                style="height: 3vh"> Editar</div>
            
            <br><br>
            <legend>Dados do Professor</legend>
            <br>
            <input type="text" name="solicnomealuno" id="solicnomealuno" placeholder="nome do professor" style="outline: none" readonly
                class="camponclubendocente">
            <br><br>
            <input type="text" name="solicanoaluno" id="solicanoaluno" placeholder="ano" style="outline: none" readonly
                class="campoiniciofimclube">
            <input type="text" name="solicturmaaluno" id="solicturmaaluno" placeholder="turma" style="outline: none" readonly
                class="campoiniciofimclube">
            <br><br>
            <textarea name="solicobsaluno" class="corpo" rows="8" placeholder="observações" readonly
                style="outline: none"></textarea>
            </form>
        </div>
        <br><br><br><br>
        <div class="relogio" id="datetime"></div>
    </div>

</body>

</html>