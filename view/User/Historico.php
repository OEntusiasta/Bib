<?php

require_once('./Model/Model.php');
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

  
<section>
    <div class="container">
        <div class="section-books">
            <div class="title-type-books">
                <h1>Histórico de livros emprestados</h1>
            </div>
            <div class="type-books">
                <?php
                foreach ($historics as $historic) {
                    if ($historic['user_id'] == $_SESSION['id']) {
                        if ($historic['date_end'] < date("d-m-Y H:i", time() + 3600 * (date("I")))) {
                            if ($book = (new Book())->find($historic['book_id'])) {
                                ?>
                                <div class="books">
                                <div class="title-type-books">
                                    <b><?= $book['name'] ?></b>
                                </div>
                                <hr>
                                <img class="img-book" src="/view/Imagens/livro-icon-png-3.png"/>
                                <div class="author-book">
                                    <?= $book['author'] ?>
                                </div>
                            <?php } ?>
                            <div class="date-book">
                                <label for="date_start"><b>Data da locação: </b><?= $historic['date_start'] ?> </label>
                            </div>
                            <div class="date-book">
                                <label for="date_end"><b>Data da entrega: </b><?= $historic['date_end'] ?></label>
                            </div>
                       
                            </div>
                        <?php }
                    }
                } ?>
            </div>
        </div>
</section>


</body>

</html>