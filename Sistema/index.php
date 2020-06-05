<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         
    </head>
    <body>
        <?php
            include 'conexao.php';
            echo 'LISTAGEM DE ALUNOS <hr>';
            $consulta= "SELECT * FROM ALUNOS";
            foreach ($conexao->query($consulta) as $linhas) {
                echo "RM: {$linhas['RM']} <br\n>";
                echo "NOME: {$linhas['NOME']} <br\n>";
                echo "IDADE: {$linhas['IDADE']} <br\n>";
                echo "<hr>";
            }
        ?>
    </body>
</html>