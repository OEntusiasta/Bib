<!DOCTYPE html>
<html lang="pt-br">

<?php
include("./resources/views/layout/head.php");
?>

<title>Cadastro</title>
<link href="../view/Css/Home_page.css" rel="stylesheet">
</head>

<body>
    <div>
    <ul class="items">
        <li><a href="/admin/home_admin">Home</a></li>
        <li><a href="/admin/add_book">Adicionar livro</a></li>
        <li><a href="">Cadastrar usuário/admin</a></li>
        <li><a href="/admin/list_user">Listar Usuários</a></li>
        <li><a href="/">Sair</a></li>
        </div>

        </section>

        <section>
            <div class="container">
                <div id="modal-screen-add-book" class="modal-screen">
                    <div class="modal-book">
                        <h3>Adicionar Livro</h3>
                        <form method="post" action="/admin/store_book">
                            <div class="books">
                                <div class="campos">
                                    <label for="title-book">Título do livro</label>
                                    <input type="text" name="name" id="title-book" title="Título do livro" size="30" required />
                                </div>
                                <div class="campos">
                                    <label for="author-book">Autor do livro</label>
                                    <input type="text" name="author" id="author-book" title="Autor do livro" size="30" required />
                                </div>
                                <div class="campos">
                                    <label for="author-book">Categoria do livro</label>
                                    <input type="text" name="category" id="author-book" title="Autor do livro" size="30" required />
                                </div>
                                <div class="campos">
                                    <select name="status" id="status">
                                        <option value="available">Available</option>
                                        <option value="pending">Pending</option>
                                        <option value="unavailable">Unvailable</option>
                                    </select>
                                </div>
                                <div class="campos">
                                    <label for="description-book">Descrição do livro</label>
                                    <textarea name="description" id="description-book" cols="50" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="btn-options">
                                <button class="btn-concluded" type="submit">Concluido</button>
                                <a id="cancel" class="btn-info-book" href="/admin/home_admin">Cancelar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

</body>

</html>