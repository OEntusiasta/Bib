<!DOCTYPE html>
<html lang="pt-br">

<?php
include("../Layout_generico/Header_Generico.php");
?>

<title>Home Page Admin</title>
<link href="../view/Css/Home_page.css" rel="stylesheet">
</head>

<body>

    <div>
        <ul class="items">
            <li><a href="/admin/home_admin">Home</a></li>
            <li><a href="/admin/add_book">Adicionar livro</a></li>
            <li><a href="/admin/register_adminUser">Cadastrar usuário/admin</a></li>
            <li><a href="/admin/list_user">Listar Usuários</a></li>
            <li><a href="/">Sair</a></li>
        </ul>
    </div>
    </nav>
    </section>

    <section>
        <div class="container">
            <div class="search">
                <input class="search-nav" name="serach" type="search" placeholder="Pesquisar Livro..." size="40" />
                <button type="submit">&#128269;</button>
            </div>
            <div class="section-books">
                <div class="type-books">
                    <?php
                    foreach ($books as $book) {
                    ?>


                        <div class="books">
                            <div class="title-type-books">
                                <h1><?= $book['name'] ?></h1>
                            </div>

                            <img class="img-book" src="../view/Imagens/livro-icon-png-3.png" />
                            <div class="title-book">
                                <b><?= $book['status'] ?></b>
                            </div>
                            <div class="btn">
                                <form method="post" action="/admin/edit_book">
                                    <div class="btn-options">
                                        <input type="hidden" name="id" value="<?= $book['id'] ?>" />
                                        <button type="submit" class="btn-info-book" id="info-book-modal">Atualizar livro </button>
                                    </div>
                                </form>
                                <form method="post" action="/admin/delete_book">
                                    <div class="btn-options">
                                        <input type="hidden" name="id" value="<?= $book['id'] ?>" />
                                        <button type="submit" class="btn-info-book" id="info-book-modal">Excluir livro </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </section>

</body>

</html>