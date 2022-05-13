<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <!-- Scripts -->

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/515f721cec.js" crossorigin="anonymous"></script>
    <!-- progress bar -->
    <script src="js/progressbar.mim.js"></script>
    <!-- parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/img/Logo.png" class="img-fluid" alt="Logo de caneca">
        </div>
    </div>

    <div class="login-center">
        <h1>Logar</h1>
        <br><br>
        <form action="loja.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <input type="email" class="form-control email" name="email" placeholder="E-mail:" required>
                        <br>
                        <input type="password" class="form-control email" name="pass" placeholder="Senha:" required>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                        <input type="submit" value="Logar" class="btn btn-dark col-6">
                        <input type="reset" value="Entrar como Visitante" class="btn btn-dark col-6">
                        <br><br>
                </div>
                <br>
                <a href="criarConta.php" style="color: black;">Criar Conta</a>
            </div>
        </form>
    </div>
    <div class="linha">

    </div>


    <?php require_once "../src/views/footer.php"; ?>