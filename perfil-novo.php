<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>


    <section class="fundo">
        <?php
        include_once("menu.php");
        ?>
        <div class="container">
            <div class="row w-50 ms-auto me-auto h-1000">
                <div class="col align-self-center border rounded-3 p-3 fundoBranco">
                    <form action="perfil-salvar.php" class="" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col">

                                <input type="text" class="form-control mb-3" placeholder="Nome" name="nome">


                                <input type="email" class="form-control mb-3" placeholder="Email" name="email">


                                <input type="text" class="form-control mb-3" placeholder="Profissão" name="profissao">


                                <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição" class="form-control mb-3"></textarea>


                                <input type="text" class="form-control mb-3" placeholder="Instagram" name="instagram">


                                <input type="text" class="form-control mb-3" placeholder="Twitter" name="twitter">


                                <input type="text" class="form-control mb-3" placeholder="Facebook" name="facebook">


                                <input type="text" class="form-control mb-3" placeholder="Linkedin" name="linkedin">


                                <input type="text" class="form-control mb-3" placeholder="Youtube" name="youtube">


                                <input type="password" class="form-control mb-3" placeholder="Senha" name="senha">


                                <input type="file" name="foto" class="form-control mb-3">

                                <div class="row">

                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="fundo" id="fundo1"
                                            value="img/fundo01.jpg" checked>
                                            <label for="fundo1" class="form-check-label">
                                                Imagem de fundo 01
                                                <img src="img/fundo01.jpg" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="fundo" id="fundo2"
                                            value="img/fundo02.jpg">
                                            <label for="fundo2" class="form-check-label">
                                                Imagem de fundo 02
                                                <img src="img/fundo02.jpg" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="fundo" id="fundo3"
                                            value="img/fundo03.jpg">
                                            <label for="fundo3" class="form-check-label">
                                                Imagem de fundo 03
                                                <img src="img/fundo03.jpg" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="fundo" id="fundo4"
                                            value="img/fundo04.jpg">
                                            <label for="fundo4" class="form-check-label">
                                                Imagem de fundo 04
                                                <img src="img/fundo04.jpg" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>