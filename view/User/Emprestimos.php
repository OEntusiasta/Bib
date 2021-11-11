<!DOCTYPE html>
<html lang="en">
<?php
include("../Layout_generico/Header_Generico.php");
?>
<link href="../view/Css/Home_page.css" rel="stylesheet">
<title>Empréstimos</title>
</head>

<body>
    <?php
    include("./resources/views/layout/nav.php");
    ?>
    <ul class="items">
        <li><a href="/User/hp">Home</a></li>
        <li><a href="/User/Emprestimos">Empréstimos</a></li>
        <li><a href="/client/historic">Histórico</a></li>
        <li><a href="/client/data_user">Dados</a></li>
        <li><a href="/">Sair</a></li>
    </ul>
    </div>
    </nav>
    </section>

    <section>
        <div class="container">
            <div class="section-books">
                <div class="title-type-books">
                    <h1>Livros emprestados</h1>
                </div>
                <div class="type-books">
                    <?php
                    foreach ($loans as $userloan) {
                        if ($userloan['user_id'] == $_SESSION['id']) {
                    ?>
                            <div class="books">
                                <div class="title-type-books">
                                    <?php if ($book = (new Book())->find($userloan['book_id'])) { ?>
                                        <b><?= $book['name'] ?></b>
                                </div>

                                <img class="img-book" src="/view/Imagens/livro-icon-png-3.png" />
                                <div class="author-book">
                                    <?= $book['author'] ?>
                                </div>
                            <?php } ?>
                            <div class="date-book">
                                <label for="date_start"><b>Data da locação: </b><?= $userloan['date_start'] ?> </label>
                            </div>
                            <div class="date-book">
                                <label for="date_end"><b>Data da entrega: </b><?= $userloan['date_end'] ?></label>


                                <form method="post" action="/client/devolution">
                                    <input type="hidden" name="id" value="<?= $userloan['id'] ?>">
                                    <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                                    <button class="btn-concluded" type="submit">Devolver</button>
                                </form>
                            </div>
                    <?php }
                    } ?>
                            </div>
                </div>
    </section>

</body>

</html>