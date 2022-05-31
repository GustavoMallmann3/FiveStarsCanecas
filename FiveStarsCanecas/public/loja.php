<?php

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
// o if faz com que, caso nao receba nenhum dado post, no caso cliclando como visitante, ele trata o post como nulo



if($email != null && $pass != null) {
    if($email == 'luisdaniel@gmail.com' && $pass == '1234') {
        $msg = 'Bem vindo!';
       
    } else {
        $msg = 'Acesso Negado!';
        
  
    }
}



// puxando navbar com php 
require_once "../src/views/header_nav.php";
?>

    <h1>
         <?= (isset($msg) ? $msg : "Visitante")?>
    </h1>
    <?= (isset($redirect) ? $redirect : "<hr>")?>


    <form action="fizalizacaoDoPedido.php" method="get">

    <div class="conteiner">


              <!-- Linha 1 -->
         <div class="row">
            <div class="col-sm">
                <!-- Produto 1 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/Caneca_One_Piec.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                        Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca One Piec
                    </div>
                    <div class="preco-produto">
                        R$ 100,00 
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value=" Caneca_One_Piec">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 2 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/Caneca_Melhor_Pai.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca Personalizada do Melhor Pai (100% Preta)
                    </div>
                    <div class="preco-produto">
                        R$ 99,99
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value=" Caneca Personalizada do Melhor Pai ">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 3 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/Caneca_No_Coffee_No_Forcee.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca No Coffee No Forcee Sem Café Sem Força
                    </div>
                    <div class="preco-produto">
                        R$ 119,99
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value="Caneca No Coffee No Forcee Sem Café Sem Força">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 4 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/CANECA_HOMER_SIMPSONS_SPAC.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    CANECA HOMER SIMPSONS SPACE
                    </div>
                    <div class="preco-produto">
                        R$ 69,99 
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value="CANECA HOMER SIMPSONS SPACE">
                        Comprar >>>
                    </button>
                </div>
            </div>

        </div> <!-- /row -->




         <!-- Linha 2 -->
         <div class="row">
            <div class="col-sm">
                <!-- Produto 5 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/caneca_programador.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                        Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                        Caneca Programador(a) / Código Fonte
                    </div>
                    <div class="preco-produto">
                        R$ 79,99 
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value="Caneca Programador(a) / Código Fonte">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 8 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/caneca_breaking.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca Breaking Bad 05
                    </div>
                    <div class="preco-produto">
                        R$ 129,99 
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value=" Caneca Breaking Bad 05">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 7 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/Caneca_Gamer.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca Gamer Personalizada - Só Mais Cinco Minutos
                    </div>
                    <div class="preco-produto">
                        R$ 89,99
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value=" Caneca Gamer Personalizada - Só Mais Cinco Minutos">
                        Comprar >>>
                    </button>
                </div>
            </div>

            <div class="col-sm">
                <!-- Produto 6 -->
                <div class="produto">
                    <div class="foto">
                        <img class="img-produto" src="assets/img/Caneca_Albert_Einstei.png" alt="Canecas Personalizadas">
                    </div>
                    <div class="nome-produto">
                    Five Stars Canecas Personalizadas!
                    </div>
                    <div class="descricao-produto">
                    Caneca Personalizada Albert Einstein (100% Preta)
                    </div>
                    <div class="preco-produto">
                        R$ 120,00 
                    </div>
                    <button class="btn btn-outline-light" type="checkbox" name="produtos[]" value="CANECA ALBERT EINSTEIN">
                        Comprar >>>
                    </button>
                </div>
            </div>
            

        </div> <!-- /row -->

     </div>


        Pagamento:
        <input type="radio" name="pgto" value="Dinheiro"> Dinheiro
        <input type="radio" name="pgto" value="Pix"> Pix
        <input type="radio" name="pgto" value="Cartão"> Cartão
        <hr>
        Entrega:
        <select name="entrega" require>
            <option value="">Selecione...</option>
            <option value="Viamão">Viamão</option>
            <option value="Gravatai">Gravatai</option>
            <option value="Alvorada">lvorada</option>
            <option value="Canoas">Canoas</option>
            <option value="Porto Alegre">Porto Alegre</option>

        </select>

        <br><br>
        <input type="submit" value="Fazer Pedido">
        <input type="reset" value="Reiniciar">
    </form>
    

    <?php require_once "../src/views/footer.php"; ?>