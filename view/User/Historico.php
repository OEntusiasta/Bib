<?php
require_once('./Model/Books.php');
require_once('./Model/User.php');
require_once('./Model/loan.php');
?>
<html>

<head>
    <?php
    include("../Layout_generico/Header_Generico.php");
    ?>
    <title>Histórico</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../view/Css/InsideUser.css" rel="stylesheet">

</head>

<body class="overflow-hidden">

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
                    <li><a href="/client/data_user">Meus Dados</a></li>
                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed" data-toggle="collapse" href="/" aria-expanded="false" aria-controls="nav-collapse2">Sair</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="mensagem">
            <h1>Histórico de livros emprestados</h1>
        </div>
    <div class="container-table">
    <div class="container overflow-auto">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Livro</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Data da locação</th>
                    <th scope="col">Data da entrega</th>
                </tr>
            </thead>
            <tbody>
                <div class="section-books">
                    <div class="type-books">
                        <?php
                        foreach ($historics as $historic) {
                            if ($historic['user_id'] == $_SESSION['id']) {
                                if ($historic['date_end'] < date("d-m-Y H:i", time() + 3600 * (date("I")))) {
                                    if ($book = (new Book())->find($historic['book_id'])) {
                        ?>
                                        <tr>
                                            <td><img src="../view/Imagens//livro-icon-png-3.png" style="width: 3vw">
                                                <img</td>
                                            <td><?= $book['name'] ?></td>
                                            <td><?= $book['author'] ?></td>
                                            <td><?= $historic['date_start'] ?> </td>
                                            <td><?= $historic['date_end'] ?></td>

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

    <script type="text/javascript" src="../view/pagination.js"></script>
</body>

</html>