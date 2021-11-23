<?php
require_once('./Model/Books.php');
require_once('./Model/User.php');
?>
<html>

<head>
    <?php
    include("../Layout_generico/Header_Generico.php");
    ?>
    <title>Empréstimos</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../view/Css/InsideUser.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/User/hp">Biblioteca Online</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/User/hp">Home</a></li>
                    <li><a href="/User/Emprestimos">Empréstimos</a></li>
                    <li><a href="/client/historic">Histórico</a></li>
                    <li><a href="/client/data_user"><span class=" glyphicon glyphicon-user"></span>Meus Dados</a></li>
                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed" data-toggle="collapse" href="/" aria-expanded="false" aria-controls="nav-collapse2"><span class="glyphicon glyphicon-log-in"></span>Sair</a>
                    </li>
                </ul>
            </div>
    </nav>


    <div class="mensagem">
        <h1>Livros emprestados</h1>
    </div>
    <div class="container-table">
        <div class="container">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Livro</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Data da locação: </th>
                        <th scope="col">Data da entrega: </th>
                        <th scope="col">Devolução</th>


                    </tr>
                </thead>
                <tbody>
                    <div class="section-books">
                        <div class="type-books">
                            <?php
                            foreach ($loans as $userloan) {
                                if ($userloan['user_id'] == $_SESSION['id']) {
                            ?>
                                    <tr>
                                        <td><img src="../view/Imagens//livro-icon-png-3.png" style="width: 3vw">
                                            <img< /td>
                                        <td>
                                            <?php if ($book = (new Book())->find($userloan['book_id'])) { ?>
                                                <b><?= $book['name'] ?></b>
                                        </td>
                                        <td>
                                            <?php if ($book = (new Book())->find($userloan['book_id'])) { ?>
                                                <b><?= $book['author'] ?><b>

                                        </td>
                                        <td><?= $userloan['date_start'] ?> </td>
                                        <td></b><?= $userloan['date_end'] ?></td>
                                        <td>
                                            <form method="post" action="/client/devolution">
                                                <input type="hidden" name="id" value="<?= $userloan['id'] ?>">
                                                <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                                                <button class="btn btn-primary" type="submit">Devolver</button>
                                            </form>
                                        </td>
                                    </tr>
                        </div>
                    </div>


            <?php }
                                            } ?>
    <?php
                                }
                            } ?>

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>