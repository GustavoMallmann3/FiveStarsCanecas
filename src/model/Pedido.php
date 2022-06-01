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
        //Informar o fuso horário
        date_default_timezone_set("America/Sao_Paulo");
        $this->dataHora = date('Y-m-d H:i:s');
        //Informar a data e hora
        return "<br>Data e hora do pedido: " . date("d/m/Y - H:i:s");
    }
        

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }


}
