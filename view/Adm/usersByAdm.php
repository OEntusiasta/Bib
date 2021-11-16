<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php
include("./resources/views/layout/head.php");
?>
<link href="../view/Css/Home_page.css" rel="stylesheet">
<title>Lista de Usuários</title>
</head>

<body>
    <ul class="items">
        <li><a href="/admin/home_admin">Home</a></li>
        <li><a href="/admin/add_book">Adicionar livro</a></li>
        <li><a href="">Cadastrar usuário/admin</a></li>
        <li><a href="/admin/list_user">Listar Usuários</a></li>
        <li><a href="/">Sair</a></li>
    </ul>
    </div>
    </nav>
    </section>

    <section>
        <div class="container">
            <div class="section-books">
                <div class="list_users">
                    <?php
                    foreach ($users as $user) {
                    ?>
                        <div class="users">
                            <div class="title-type-books">
                                <label>Cliente: <?= $user['name'] ?></label>
                            </div>
                            <div class="title-type-books">
                                <label>Email: <?= $user['email'] ?></label>
                            </div>
                            <div class="title-type-books">
                                <label>Telefone: <?= $user['phone'] ?></label>
                            </div>
                            <div class="title-type-books">
                                <label>Admin ?: <?= $user['is_admin'] ?></label>
                            </div>

                            <div class="btn">
                                <form method="post" action="/admin/data_user">
                                    <div class="btn-options">
                                        <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                                        <button type="submit" class="btn-info-book" id="info-book-modal">Atualizar cliente </button>
                                    </div>
                                </form>
                                <form method="post" action="/admin/delete_user">
                                    <div class="btn-options">
                                        <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                                        <button type="submit" class="btn-info-book" id="info-book-modal">Excluir cliente </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


</body>

</html>