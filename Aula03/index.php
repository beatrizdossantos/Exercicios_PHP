<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Produtos.php';
        $produto1 = new Produtos();
        $produto1 ->descricao = "Bisnaguinha";
        $produto1 ->estoque = 30;
        $produto1 ->preco = 4.50;
        $produto1 ->marca = "Seven Boys";
        $produto1 ->cod_produto = "001";
        $produto1 ->cor_embalagem = "Azul";
        $produto1 ->prazo_validade = "10-10-2018";
        
        $produto1->aumentarEstoque(5);
        $produto1->diminuirEstoque(2);
        $produto1->reajustarPreco(10);
        
        
        
        
        
        $produto2 = new Produtos();
        $produto2 ->descricao = "Nutella";
        $produto2 ->estoque = 45;
        $produto2 ->preco = 9.50;
        $produto2 ->marca = "Nutella";
        $produto2 ->cod_produto = "002";
        $produto2 ->cor_embalagem = "Marrom";
        $produto2 ->prazo_validade = "10-11-2018";
        
        $produto3 = new Produtos();
        $produto3 ->descricao = "Toddynho";
        $produto3 ->estoque = 25;
        $produto3 ->preco = 3;
        $produto3 ->marca = "Toddy";
        $produto3 ->cod_produto = "003";
        $produto3 ->cor_embalagem = "Vermelho";
        $produto3 ->prazo_validade = "23-10-2018";
        
        
        echo "Lojinha Etec MCM <br\n><br\n>";
        
        echo "Descrição: {$produto1->descricao} <br\n>";
        echo "Estoque: {$produto1->estoque} <br\n>";
        echo "Preço: {$produto1->preco} <br\n>";
        echo "Marca: {$produto1->marca} <br\n>";
        echo "Código do Produto: {$produto1->cod_produto} <br\n>";
        echo "Cor da Emablagem: {$produto1->cor_embalagem} <br\n>";
        echo "Prazo de Validade: {$produto1->prazo_validade} <br\n>"; 
        
        echo "<hr>";
         
        echo "Descrição: {$produto2->descricao} <br\n>";
        echo "Estoque: {$produto2->estoque} <br\n>";
        echo "Preço: {$produto2->preco} <br\n>";
        echo "Marca: {$produto2->marca} <br\n>";
        echo "Código do Produto: {$produto2->cod_produto} <br\n>";
        echo "Cor da Emablagem: {$produto2->cor_embalagem} <br\n>";
        echo "Prazo de Validade: {$produto2->prazo_validade} <br\n>"; 
        
        echo "<hr>";
        
        echo "Descrição: {$produto3->descricao} <br\n>";
        echo "Estoque: {$produto3->estoque} <br\n>";
        echo "Preço: {$produto3->preco} <br\n>";
        echo "Marca: {$produto3->marca} <br\n>";
        echo "Código do Produto: {$produto3->cod_produto} <br\n>";
        echo "Cor da Emablagem: {$produto3->cor_embalagem} <br\n>";
        echo "Prazo de Validade: {$produto3->prazo_validade} <br\n>"; 
        
        ?>
    </body>
</html>
