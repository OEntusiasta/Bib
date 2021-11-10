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
        <li><a href="../User/Historico.php">Histórico</a></li>
        <li><a href="../User/Dados_usuario.php">Dados</a></li>
        <li><a href="../Login.php">Sair</a></li>
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

                    <div class="date-book">
                        <label for="date_start"><b>Data da locação: </b><?= $userloan['date_start'] ?> </label>
                    </div>
                    <div class="date-book">
                        <label for="date_end"><b>Data da entrega: </b><?= $userloan['date_end'] ?></label>
                    </div>

                    <form method="post" action="/client/devolution">
                        <input type="hidden" name="id" value="<?= $userloan['id'] ?>">
                        <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                        <button class="btn-concluded" type="submit">Devolver</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>