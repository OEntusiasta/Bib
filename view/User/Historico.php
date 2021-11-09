<!DOCTYPE html>
<html lang="en">
<?php
    include("../Layout_generico/Header_Generico.php");
    ?>
<link href="../Css/Home_page.css" rel="stylesheet">
<title>Histórico</title>
</head>

<body>
    <?php
    include("./resources/views/layout/nav.php");
    ?>
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
            <div class="section-books">
                <div class="title-type-books">
                    <h1>Histórico de livros emprestados</h1>
                </div>
                <div class="type-books">

                    <div class="date-book">
                        <label for="date_start"><b>Data da locação: </b><?= $historic['date_start'] ?> </label>
                    </div>
                    <div class="date-book">
                        <label for="date_end"><b>Data da entrega: </b><?= $historic['date_end'] ?></label>
                    </div>


                </div>
            </div>
    </section>

    <?php
    include("./resources/views/layout/footer.php");
    ?>

    <script src="./resources/public/js/script.js"></script>

</body>

</html>