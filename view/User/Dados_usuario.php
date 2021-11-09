<html lang="pt-br">

<?php
    include("../Layout_generico/Header_Generico.php");
    ?>
<title>Atualizar Dados</title>
<link href="../Css/Home_page.css" rel="stylesheet">
<link href="../Css/tudo.css" rel="stylesheet">

</head>

<body>

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
            <fieldset>
                <form method="POST" action="/client/update_data_user">
                    <div class="input-login">
                        <h1>Seus dados</h1>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu e-mail" size="30" value="<?= $_SESSION['email'] ?>" />

                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" value="<?= $_SESSION['password'] ?>" />
                        </div>

                        <div class="campos">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" title="Digite seu nome" size="30" value="<?= $_SESSION['name'] ?>" />
                        </div>

                        <div class="campos">
                            <label for="phone">Telefone</label>
                            <input type="tel" name="phone" id="phone" title="Digite seu telefone" size="30" minlength="11" maxlength="15" value="<?= $_SESSION['phone'] ?>" />
                        </div>

                        <div class="btn-options">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                            <button class="btn-concluded" type="submit">Concluido</button>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>


</body>

</html>