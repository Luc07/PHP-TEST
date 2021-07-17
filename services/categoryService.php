<?php
    function categoryClassification(string $nome, string $idade) : string{
        /**
         * Faz a validaçaõ do nome e da idade se passaram em todos os testes.
         */
        if(validacao($nome, $idade)){
            /**
             * Classifica a categoria de acordo com a idade passada.
             */
            if($idade >= 6 && $idade <= 12){
                $categoria =  "infantil";
            }
            elseif ($idade >= 13 && $idade <= 18){
                $categoria = "adolescente";
            }
            elseif ($idade > 18) {
                $categoria = "adulto";
            }
            msgDeSuccess("O nadador $nome está na categoria $categoria.");
            return getMsgSuccess();
        /**
         * Se a validação deu errada retorna a mensagem de erro.
         */
        }else{
            return getMsgErro();
        }
        
    }
?>