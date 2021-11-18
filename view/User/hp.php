<html>

<head>
    <?php
    include("../Layout_generico/Header_Generico.php");
    ?>
    <title>Home Page</title>
 
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
            <div class="collapse navbar-collapse"  id="navbar-collapse-2">
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
            <div class="mensagem">
                <h1><b> Bem Vindo a Biblioteca Online<b> <?= $_SESSION['name'] ?>  <h1>
            </div>
            <div class="section-books">
                <div class="type-books">
                    <?php
                    foreach ($booksClient as $book) {
                    ?>


                        <div class="books">
                            <div class="title-type-books">
                                <h1><?= $book['category'] ?></h1>
                            </div>

                            <img class="img-book" src="/view/Imagens/livro-icon-png-3.png" />
                            <div class="title-book">
                                <b><?= $book['name'] ?></b>
                            </div>
                            <div class="author-book">
                                <b><?= $book['author'] ?></b>
                            </div>
                            <div class="description-book">
                                <p><?= $book['description'] ?></p>
                            </div>

                            <div class="btn-options">
                                <?php
                                if (($book['status'] == 'pending') || ($book['status'] == 'unavailable')) {

                                    echo "Status: " . $book['status'];
                                } else {
                                ?>

                                    <form method="post" action="/client/store">
                                        <input type="hidden" name="id" value="<?= $book['id'] ?>" />
                                        <button class="btn-concluded" type="submit">Emprestar</button>
                                    </form>

                                <?php } ?>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>