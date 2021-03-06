<?php
require_once('./Model/Books.php');
require_once('./Model/User.php');
?>
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
                        <a class="btn btn-default btn-outline btn-circle collapsed" data-toggle="collapse" href="/" aria-expanded="false" aria-controls="nav-collapse2"></span>Sair</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container-table">
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">É administrador?</th>
                        <th scope="col">Atualizar</th>
                        <th scope="col">Excluir</th>

                    </tr>
                </thead>
                <tbody>
                    <div class="section-books">
                        <div class="type-books">
                            <?php
                            foreach ($users as $user) {
                            ?>
                                <tr>
                                    <td> <?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['phone'] ?></td>
                                    <td> <?= $user['is_admin'] ?></td>
                                    <td>
                                        <div class="btn">
                                            <form method="post" action="/admin/data_user">
                                                <div class="btn-options">
                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                                                    <button type="submit" class="btn btn-primary" id="info-book-modal">Atualizar cliente </button>
                                                </div>
                                    </td>
                                    <td>
                                        </form>
                                        <div class="btn">
                                        <form method="post" action="/admin/delete_user">
                                            <div class="btn-options">
                                                <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                                                <button type="submit" class="btn btn-primary" id="info-book-modal">Excluir cliente </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                        </div>
                    </div>
                <?php } ?>
        </div>
        </tbody>
        </table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>