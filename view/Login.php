<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
       include("../view/Layout_generico/Header_Generico.php");
    ?> 

    <title>Login</title>
    <link href="../view/Css/tudo.css" rel="stylesheet"> 
</head>

<body>

            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <fieldset>
                <form method="POST" action="/login">
                    <div class="input-login">
                        <h1>Faça seu login </h1>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu E-mail" size="30" autofocus />
                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" />
                        </div>
                        <div class="btn-options">
                   
                            <button type="submit" class="btn-info-book-log" > Entrar </button>
                        </div>
                    </div>
                </form>
                <form method="post" action="">
                    <div class="btn-options">
                        <button type="submit" class="btn-info-book-reg"> Registre-se</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>

</body>
<?php
                    include("../view/Layout_generico/Footer_Generico.php");
                ?>

</html>
