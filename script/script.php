<?php
    include '../services/validationService.php';
    include '../services/sessionMsgService.php';
    include '../services/categoryService.php';
    
    $idade = $_POST['idade'];
    $nome = ucwords($_POST['nome']);
    
    /**
     * Se o nome e a idade passaram na validação imprime a mensagem de sucesso informando a categoria do nadador.
     */
     categoryClassification($nome, $idade);
    header('location: ../index.php');
?>
<html>
    <body>
    </body>
</html>