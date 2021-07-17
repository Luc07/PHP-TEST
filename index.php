<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>calculadora</title>
        <script ></script>
    </head>
    <body>
        <?php
            session_start();
        ?>
        <form action="../n/script/script.php" method="post">
            <?php 
                $msgDeErro = isset($_SESSION['msgErro']) ? $_SESSION['msgErro'] : ''; 
                $msgDeSuccess = isset($_SESSION['msgSuccess']) ? $_SESSION['msgSuccess'] : '';
                if(!empty($msgDeErro) && empty($msgDeSuccess)){
                    echo $msgDeErro;
                }
                if(!empty($msgDeSuccess)){
                    echo $msgDeSuccess;
                }
                if(!empty($msgDeErro) || !empty($msgDeSuccess)){
                    session_destroy();
                }
            ?>
            <p>Seu nome: <input type="text" name="nome" placeholder="Nome"></p>
            <p>Sua Idade: <input type="text" name="idade" placeholder="Idade"></p>
            <p><input type="submit" id="classificar" value="Enviar"></p>
        </form>
    </body>
</html>