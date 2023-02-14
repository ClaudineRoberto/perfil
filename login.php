<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <section class="fundo">
        <div class="container">
            <div class="row w-50 ms-auto me-auto vh-100">
                <div class="col align-self-center border rounded-3 p-3 fundoBranco">
                    <form action="validar.php" method="POST">
                        <div class="row">
                            <div class="col">

                                <label for="exampleFormControlInput1" class="form-label">Usuário</label>
                                <input type="email" class="form-control" placeholder="Usuário" name="usuario" required>

                                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                                <input type="password" class="form-control" placeholder="Senha" name="senha" required>

                                <button class="btn btn-primary mt-3">Login</button>
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