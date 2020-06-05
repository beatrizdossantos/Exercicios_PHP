<?php

class Caneta {
    
    public $cor;
    public $ponta;
    public $carga;
    public $fabricante;
    public $tampada;

    function tampar (){
       $this->tampada=true; 
    }
    
    function destampar() {
        $this->tampada=false;
    }
    
    function rabiscar(){
        if ($this->tampada == false) {
          echo 'Estou Rabiscando!';  
        } else {
            echo 'NÃO POSSO RABISCAR!!!';  
        }
    }
 
    function status() {
        echo $this->cor."<br>";
        echo $this->fabricante."<br>";
        echo $this->ponta."<br>";
        echo $this->tampada."<br>";
        echo $this->carga."<br>";
    }
    
 }    
    
