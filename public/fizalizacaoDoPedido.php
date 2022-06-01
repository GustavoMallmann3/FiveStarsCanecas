<?php

use Database\Database;
use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido();  //Criação do objeto...

    if( isset($_GET['produtos'])) {
        $ped->itens = $_GET['produtos'];  //preenchido com atributo 'itens'
    } else {
        $ped->itens = null;
    }

    if( isset($_GET['qtde'])) {
        $ped->qtde = $_GET['qtde']; //preenchido com atributo 'qtde'
    } else {
        $ped->qtde = null;
    }

    if( isset($_GET['pgto'])) {
        $ped->pgto = $_GET['pgto']; //preenchido com atributo 'pgto'
    } else {
        $ped->pgto = null;
    }

    if( isset($_GET['entrega'])) {
        $ped->entrega = $_GET['entrega']; //preenchido com atributo 'entrega'
    } else {
        $ped->entrega = null;
    }

    $listaItens = null;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de dados</title>
</head>
<body>

    <h3>
        <?= $ped->gerarCodigo(); ?>
    </h3>

    <?php if($ped->itens != null) : ?>
        <?php foreach($ped->itens as $i) : ?>
            <!-- nossa estrutura html se repetira dependendo do numero de itens da lista -->
        <h3 style="font-family: 'Courier New', Courier, monospace;">
            <?php
                echo $i;
                $listaItens .= $i . ' ,'; 
             
             ?>
        </h3><hr>
        <?php endforeach ?>
    <?php else : 
        echo "<h3> Sem produtos. </h3><hr>"; 
        endif
    ?>

    <h3 style="font-family: 'Courier New', Courier, monospace;">
        <?= $ped->qtde ?>
    </h3><hr>
    <h3 style="font-family: 'Courier New', Courier, monospace;">
        <?= $ped->pgto ?>
    </h3><hr>
    <h3 style="font-family: 'Courier New', Courier, monospace;">
            <?= $ped->entrega ?>
    </h3><hr>

    <?php
/////////////////////////////////////////////////////////////////////////////////////////////
// require_once "../src/model/Database.php";
//$db = new Database();

// $db->insert(
  //  "INSERT INTO pedidos(data_hora, itens, qtde, pgto, entrega)
  //  VALUES('$ped->dataHora' , '$listaItens' , $ped->qtde , '$ped->pgto' , '$ped->entrega'); "
// );
//////////////////////////////////////////////////////////////////////////////////////////////
?>


    

</body>
</html>
<?php require_once "../src/views/footer.php"; ?>