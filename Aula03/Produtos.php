<?php

class Produtos {
    public $descricao;
    public $preco;
    public $estoque;
    public $cod_produto;
    public $marca;
    public $cor_embalagem;
    public $prazo_validade;
    
    public function aumentarEstoque ($unidades){
        if ($unidades>0){
            $this->estoque += $unidades;
        }
    }
    
    public function diminuirEstoque ($unidades){
        if ($unidades>0){
            $this->estoque -= $unidades;
        }
    }
    
      public function reajustarPreco ($percentual){
        if ($percentual>0){
            $this->preco *= (1 + ($percentual/100));
        }
    }
    
}
