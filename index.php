<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ClassCategoria</title>
    </head>
    <body>
        <?php
            include 'services/sessionMsgService.php';
        ?>
        <form action="../n/script/script.php" method="post">
            <?php
                $msgDeErro = getMsgErro(); 
                $msgDeSuccess = getMsgSuccess();
                if(!empty($msgDeErro) && empty($msgDeSuccess)){
                    echo $msgDeErro;
                }
                if(!empty($msgDeSuccess)){
                    echo $msgDeSuccess;
                }
                removerMsg();
            ?>
            <p>Seu nome: <input type="text" name="nome" placeholder="Nome"></p>
            <p>Sua Idade: <input type="text" name="idade" placeholder="Idade"></p>
            <p><input type="submit" id="classificar" value="Enviar"></p>
        </form>
    </body>
</html>