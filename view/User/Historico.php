<?php

require_once('./Model/Model.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include("../Layout_generico/Header_Generico.php");
    ?>
<link href="../view/Css/Home_page.css" rel="stylesheet">
<title>Histórico</title>
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
                <h1>Histórico de livros emprestados</h1>
            </div>
            <div class="type-books">
                <?php
                foreach ($historics as $historic) {
                    if ($historic['user_id'] == $_SESSION['id']) {
                        if ($historic['date_end'] < date("Y-m-d H:i:s", time() + 3600 * (date("I")))) {
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