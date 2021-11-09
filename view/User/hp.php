<html>

<head>
    <?php
    include("../Layout_generico/Header_Generico.php");
    ?>
    <title>Home Page</title>
    <link href="../Css/Home_page.css" rel="stylesheet">

</head>

<body>

    <nav>
        <ul class="items">
            <li><a href="../User/hp.php">Home</a></li>
            <li><a href="../User/Emprestimos.php">Empréstimos</a></li>
            <li><a href="../User/Historico.php">Histórico</a></li>
            <li><a href="../User/Dados_usuario.php">Dados</a></li>
            <li><a href="../Login.php">Sair</a></li>
        </ul>
        </div>
    </nav>
    </section>
    <section>
        <div class="container">
            <div class="search">
                <p><b>Usuário logado: </b> <?= $_SESSION['name'] ?></p>
            </div>
            <div class="mensagem">
                <h1> Bem Vindo a Biblioteca Online <h1>
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
                            <hr>
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b><?= $book['name'] ?></b>
                            </div>
                            <div class="author-book">
                                <b><?= $book['author'] ?></b>
                            </div>
                            <div class="description-book">
                                <p><?= $book['description'] ?></p>
                            </div>
                            <hr>
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


    <?php
    include("./Layout_generico/views/Footer_Generico/footer.php");
    ?>
</body>

</html>