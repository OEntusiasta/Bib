<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("../view/Layout_generico/Header_Generico.php");
    ?>

    <title>Adicionar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../view/Css/Outside.css" rel="stylesheet">
</head>

<body>
    </div>
    </nav>
    </section>
    <div class="container-add-book">

        <div class="d-flex justify-content-center h-90">
            <div class="position-fixed" id="particles-js" style="width: 100vw; height: 100vh;"></div>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script>
            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436735/app.js"></script>
            <div class="card h-100">
                <div class="card-header">
                    <h3>Adicionar Livro</h3>
                </div>
                <form method="POST" action="/admin/store_book">
                    <div class="card-body">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book"></i></span>

                            </div>
                            <input type="text" name="name" id="title-book" placeholder="Título" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book-reader"></i><span>
                            </div>
                            <input type="text" name="author" id="author-book" placeholder="Autor" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-d-and-d"></i><span>

                            </div>
                            <input type="text" name="category" id="author-book" placeholder="Categoria" size="30" required />
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-check"></i><span>

                            </div>
                            <select name="status" id="status">
                                <option value="available">Available</option>
                                <option value="pending">Pending</option>
                                <option value="unavailable">Unvailable</option>
                            </select>
                        </div>
                        <div class="input-group form-group">

                            <textarea name="description" id="description-book" placeholder="Descrição" cols="50" rows="8" required></textarea>
                        </div>

                        <div class="btn-options d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit" class="btn-info-book-log">Concluido</button>
                        </div>
                        <div class="btn-options d-flex justify-content-center">
                            <a class="btn-exit" class="btn-info-book-exit" href="/admin/home_admin">Cancelar</a>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>