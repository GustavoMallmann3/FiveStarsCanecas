<?php

require_once "../src/views/header_login.php";
?>

    <div class="container">
        <div class="logo">
            <img src="assets/img/logo.png" class="img-fluid" alt="Logo de caneca">
        </div>
    </div>

    <div class="login-center">
        <h1>Login</h1>
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
                        <input type="submit" value="Logar" class=" btn-dark col-4  offset-1" > 
                        <input type="submit" hrelf="../public/loja.php" value="Entrar como Visitante" class="btn-dark col-5 offset-1">
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