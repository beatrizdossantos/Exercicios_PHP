<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $caneta1 = new Caneta;
            $caneta1->cor="Vermelho";
            $caneta1->ponta=0.5;
            $caneta1->fabricante="PILOT";
            $caneta1->carga=55;
           // $caneta1->tampada=true;
           
            $caneta1->destampar();
            $caneta1->status();
            $caneta1->rabiscar();
            
        ?>
    </body>
</html>
