<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("../view/Layout_generico/Header_Generico.php");
    ?>

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="./view/Css/Outside.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-end h-100">
            <div class="position-fixed" id="particles-js" style="width: 100vw;  height: 100vh;"></div>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436735/app.js"></script>
            <div class="card">
                <div class="card-header">
                    <h3>Faça seu login </h3>
                </div>
                <form method="POST" action="/login">
                    <div class="card-body">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-astronaut"></i>
                            </div>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu E-mail" size="30" aria-describedby="emailHelp">
                        </div>
                        <div id="emailHelp" class="form-text">Seu email nunca será compartilhado</div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" size="30">
                        </div>
                        <div class="btn-options d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit" class="btn-info-book-log">Entrar</button>
                        </div>

                </form>

                <form method="post" action="/register">
                    <div class="btn-options d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit" class="btn-info-book-reg"> Registre-se</button>
                    </div>
                    <div class="d-flex justify-content-center links">
                        Não tem conta? Se inscreve ai!
                    </div>
                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>