<?php

use Database\Database;

if(isset($_POST['name'])) {
    $nome = $_POST['name'];
} else {
    $nome = null;
}
if( isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = null;
}
if(isset($_POST['pass'])) {
    $pass = $_POST['pass'];
} else {
    $pass = null;
}

require_once "../src/model/Database.php";
$db = new Database();

$criarConta = $db->insert(
    "INSERT INTO usuarios ('$nome' '$email' '$senha') values ( 'name', email, pass);"
);

// var_dump($criarConta);

require_once "../src/views/header_registro.php";

?>

    <div class="registro-center">
        <h1>Fazer Registro</h1>
        <br><br>
        <form action="login.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <input type="name" class="form-control" name="name" placeholder="Seu nome" required>
                        <br>
                        <input type="email" class="form-control email" name="email" placeholder="E-mail" required>
                        <br>
                        <input type="password" class="form-control email" name="pass" placeholder="Senha" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Criar conta" class="btn btn-dark col-6 offset-3">
                    <br><br>
                </div>
                <br>
                <a href="loja.php" style="color: black;">Voltar ao início</a>
            </div>
        </form>
    </div>
    <div class="linha">

    </div>


    <?php require_once "../src/views/footer.php"; ?>