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
    <?php
        include_once("menu.php");
        ?>
        <div class="container">
            <div class="row w-50 ms-auto me-auto vh-100">
                <div class="col align-self-center border rounded-3 p-3 fundoBranco">
                    <form action="" class="">
                        <div class="row">
                            <div class="col">
                            <?php session_start();
                            
                            if(!isset($_SESSION['usuario'])){
                                header("location: login.php");
                            }
                            ?>

                            <a href="logout.php" class="btn btn-success"> Sair</a>
                            <a href="perfil-alterar.php" class="btn btn-success"> Alterar</a>
                            <?php echo $_SESSION["usuario"];?>

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