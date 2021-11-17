<!DOCTYPE html>
<html lang="pt-br">

<?php
include("./resources/views/layout/head.php");
?>

<title>Cadastro</title>
<link href="../view/Css/Home_page.css" rel="stylesheet">

</head>

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

<section>
    <div class="container">
    <div id="modal-screen-add-book" class="modal-screen">
                <div class="modal-book">
                    <h3>Adicionar Usuário</h3>
        <fieldset>
            <form method="POST" action="/admin/store_user">
                <div class="input-login">
                    <h1>Cadastre usuário ou admin </h1>
                    <div class="campos">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" title="Digite seu e-mail" size="30" required autofocus />
                    </div>

                    <div class="campos">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" title="Digite sua senha" size="30" required />
                    </div>

                    <div class="campos">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" title="Digite seu nome" size="30" required />
                    </div>

                    <div class="campos">
                        <label for="phone">Telefone</label>
                        <input type="tel" name="phone" id="phone" title="Digite seu telefone" size="30" minlength="11" maxlength="15" required />
                    </div>

                    <div class="campos">
                        <label>Tipo da conta</label>
                        <div class="type-user">
                            <input type="radio" name="type_user" id="typeUser" value="<?= false ?>" required />
                            <label> Usuário normal</label>
                        </div>
                        <div class="type-user">
                            <input type="radio" name="type_user" id="typeAdmin" value="<?= true ?>" required />
                            <label> Usuário Admin</label>
                        </div>
                    </div>

                    <div class="btn-options">
                        <button class="btn-concluded" type="submit">Concluido</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</section>


</body>

</html>