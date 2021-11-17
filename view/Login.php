<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("../view/Layout_generico/Header_Generico.php");
    ?>

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-info text-white">

    <div class="container">
        <form method="POST" action="/login">
            <div class="mb-3">
                <h1>Faça seu login </h1>
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu E-mail" size="30" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Seu email nunca será compartilhado</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" size="30">
            </div>
            <div class="btn-options col-2 mx-auto">
                <button class="btn btn-outline-primary" type="submit" class="btn-info-book-log">Entrar</button>
            </div>
        </form>
        <form method="post" action="/register">
            <div class="btn-options col-2 mx-auto">
                <button class="btn btn-primary" type="submit" class="btn-info-book-reg"> Registre-se</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<?php
include("./view/Layout_generico/Footer_Generico.php");
?>

</html>