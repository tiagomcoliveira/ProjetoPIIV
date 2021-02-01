<!doctype html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>BackOffice - Lista de Clubes</title>
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
        
        <div id="box">
            <span class="ion-checkmark-round"></span>
            <h1>Deseja remover Clube?</h1>
            <span onclick="PopupRemover(), Remover()" class="close btn_yesnoPopup">Sim</span>
            <span onclick="CloseRemover()" class="close btn_yesnoPopup">Não</span>
        </div>
        

        <div class="espacoclubes">
            <legend>Lista de Clubes</legend>
            <br>
            <table id="editremove" style="margin-left: auto; margin-right: auto;">
                <tr>
                    <td style="width: 200px;">
                        <div id="conteudo" class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li>
                                        <a id="remover" onclick="PopupRemover()">Remover</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Artes" src="imagens/artes.png">
                            </div>
                        </div>
                    </td>
                    <td style="width: 200px;">
                        <div class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li><a href="#top">Remover</a></li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Atividade Física" src="imagens/act_fisica.png">
                            </div>
                        </div>
                    </td>
                    <td style="width: 200px;">
                        <div class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li><a href="#top">Remover</a></li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Matemática" src="imagens/matematica.png">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">
                        <div class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li><a href="#top">Remover</a></li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Música" src="imagens/musica.png">
                            </div>
                        </div>
                    </td>
                    <td style="width: 200px;">
                        <div class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li><a href="#top">Remover</a></li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Europeu" src="imagens/europeu.png">
                            </div>
                        </div>
                    </td>
                    <td style="width: 200px;">
                        <div class="espacoeditclubes">
                            <div class="editremove">
                                <ul class="menu">
                                    <li><a href="#about">Editar</a></li>
                                    <li></li>
                                    <li><a href="#top">Remover</a></li>
                                </ul>
                            </div>
                            <div>
                                <img style="vertical-align: middle;" width="70px" height="70px" alt="Teatro" src="imagens/teatro.png">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
        <div class="relogio" id="datetime"></div>
    </div>

</body>

</html>