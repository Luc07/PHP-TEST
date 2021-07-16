<?php
    $idade = $_POST['idade'];
    $nome = ucwords($_POST['nome']);
    $categoria = null;
    $mensagem = null;
    $control = false;

    #Checar se os campos estão vazios
    if(empty($nome) && empty($idade) && $control != true){
        echo "Você não informou todos os dados solicitados.";
        $control = true;
    }
    elseif(empty($nome) && $control != true){
        echo "O nome não pode ser vazio. Por favor informe o nome.";
        $control = true;
    }
    elseif(!empty($nome) && empty($idade) && $control != true){
        echo "A idade não pode ser vazia. Por favor informe a idade.";
        $control = true;
    }

    #Checar nome ultrapassa ou tem um numero pequeno de caracteres
    if(strlen($nome) < 3 && $control != true){
        echo "<p>O nome deve ter no mínimo 3 letras. </p>";
        $control = true;
    }
    elseif(strlen($nome) > 40 && $control != true){
        echo "<p> O nome é muito extenso.</p>";
        $control = true;
    }

    #Checar a idade se é algo diferente de inteiro
    if(!is_numeric($idade) && $control != true){
        echo "<p> A idade deve ser um número.</p>";
        $control = true;
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
    if($control == false){
        echo "O nadador $nome está na categoria $categoria.";
    }
?>
<html>
    <body>
        <form action="../index.php">
            <p>
                <input type="submit" value="Voltar">
            </p>
        </form>
    </body>
</html>