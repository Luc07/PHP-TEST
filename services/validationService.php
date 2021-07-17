<?php
    function validacao(string $nome,string $idade) : bool{
        /**
         * Verificar se o nome ou a idade estão vazios.
         */
        if(empty($nome) && empty($idade)){
            msgdeErro("Você não informou todos os dados solicitados.");
            return false;
        }
        /**
         * Verifica se o nome esta vazio.
         */
        elseif(empty($nome)){
            msgdeErro("O nome não pode ser vazio. Por favor informe o nome.");
            return false;
        }
        /**
         * Verifica a idade, se ela está vazia.
         */
        elseif(!empty($nome) && empty($idade)){
            msgdeErro("A idade não pode ser vazia. Por favor informe a idade.");
            return false;
        }
        /**
         * Verifica o tamanho do nome se é curto demais ou se ultrapassou o limite.
         */
        elseif(strlen($nome) < 3){
            msgdeErro("<p>O nome deve ter no mínimo 3 letras. </p>");
            return false;
        }
        elseif(strlen($nome) > 40){
            msgdeErro("<p> O nome é muito extenso.</p>");
            return false;
        }
        /**
         * Verifica se a idade que foi passada é apenas numerica.
         */
        if(!is_numeric($idade)){
            msgdeErro("<p> A idade deve ser um número.</p>");
            return false;
        }
        return true;
    }
?>