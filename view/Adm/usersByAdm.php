<html>

<head>
    <?php
    include("../Layout_generico/Header_Generico.php");
    ?>
    <title>Lista Usuários</title>

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

                    <li><a href="/admin/home_admin">Home</a></li>
                    <li><a href="/admin/add_book">Adicionar livro</a></li>
                    <li><a href="/admin/register_adminUser">Cadastrar usuário/admin</a></li>
                    <li><a href="/admin/list_user">Listar Usuários</a></li>
                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed" data-toggle="collapse" href="/" aria-expanded="false" aria-controls="nav-collapse2"><span class="glyphicon glyphicon-log-in"></span>Sair</a>
                    </li>
                </ul>
            </div>
    </nav>


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