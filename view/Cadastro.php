<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("../view/Layout_generico/Header_Generico.php");
    ?>

    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="./view/Css/Outside.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-center h-90">
            <div class="position-fixed" id="particles-js" style="width: 100vw; height: 100vh;"></div>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436735/app.js"></script>
            <div class="card h-100">
                <div class="card-header">
                    <h3>Faça seu cadastro </h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="/store_register">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i>

                            </div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu E-mail" size="30" required autofocus />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Confirmar senha" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-astronaut"></i>
                            </div>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i>
                            </div>
                          
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="(99) 99999-9999" title="e.g (99) 99999-9999" pattern="^\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}$" required>
                        </div>


                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit" class="btn-info-book-log">Concluido</button>
                        </div>
                        <div class="form-group text-center">
                            <a class="text-white" href="/">Cancelar</a>
                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="./view/phone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>