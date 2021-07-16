<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>calculadora</title>
    </head>
    <body>
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        if(isset($_POST['nome'])){
            if(isset($_POST['idade'])){
                $idade = $_POST['idade'];
                $nome = $_POST['nome'];
                $categoria;
                if($idade >= 6 && $idade <= 12){
                    $categoria = "Infantil";
                }
                elseif ($idade >= 13 && $idade <= 18){
                    $categoria = "Adolescente";
                }
                elseif ($idade > 18) {
                    $categoria = "Adulto";
                }
                echo "O nadador $nome está na categoria $categoria.";
            }
        }
        
        
        ?>
        <form method="post">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="idade" placeholder="Idade">
            <input type="submit" id="classificar" value="Enviar">
        </form>
    </body>
</html>