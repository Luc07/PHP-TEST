<?php
    session_start();
    $idade = $_POST['idade'];
    $nome = ucwords($_POST['nome']);
    $categoria = null;
    $mensagem = null;

    #Checar se os campos estão vazios
    if(empty($nome) && empty($idade)){
        $_SESSION['msgErro'] =  "Você não informou todos os dados solicitados.";
        header('location: ../index.php');
        return;
    }
    elseif(empty($nome)){
        $_SESSION['msgErro'] = "O nome não pode ser vazio. Por favor informe o nome.";
        header('location: ../index.php');
        return;
    }
    elseif(!empty($nome) && empty($idade)){
        $_SESSION['msgErro'] = "A idade não pode ser vazia. Por favor informe a idade.";
        header('location: ../index.php');
        return;
    }

    #Checar nome ultrapassa ou tem um numero pequeno de caracteres
    if(strlen($nome) < 3){
        $_SESSION['msgErro'] = "<p>O nome deve ter no mínimo 3 letras. </p>";
        header('location: ../index.php');
        return;
    }
    elseif(strlen($nome) > 40){
        $_SESSION['msgErro'] = "<p> O nome é muito extenso.</p>";
        header('location: ../index.php');
        return;
    }

    #Checar a idade se é algo diferente de inteiro
    if(!is_numeric($idade)){
        $_SESSION['msgErro'] = "<p> A idade deve ser um número.</p>";
        header('location: ../index.php');
        return;
    }
    
    #Classificar categoria
    if($idade >= 6 && $idade <= 12){
        $categoria = "infantil";
    }
    elseif ($idade >= 13 && $idade <= 18){
        $categoria = "adolescente";
    }
    elseif ($idade > 18) {
        $categoria = "adulto";
    }
    $_SESSION['msgSuccess'] = "O nadador $nome está na categoria $categoria.";
    header('location: ../index.php');
?>
<html>
    <body>
    </body>
</html>