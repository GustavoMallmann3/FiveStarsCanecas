<?php 

namespace Model;

class Pedido 
{    
    //Atributos
    private $codPedido;
    public $itens;
    public $pgto;
    public $qtde;
    public $entrega;

    //Métodos
    public function __construct()
    {
        //Executará assim que um novo objeto dessa classe for criado 
        echo $this->gerarCodigo();
        echo $this->informarData();
    }

    private function informarData()
    {
        // informa o fuso horario
        date_default_timezone_set("America/sao paulo");
        // informa a data e hora 
        return "Data e hora do pedido: " . date("d/m/Y - H:i:s");
    }
        

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }


}
