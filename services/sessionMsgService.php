<?php
    session_start();
    function msgDeErro(string $msg) : void{
        $_SESSION['msgErro'] = $msg;
    }
    function getMsgErro() : ?string{
        if(isset($_SESSION['msgErro'])){
            return $_SESSION['msgErro'];
        }
        return null;
    }
    function msgDeSuccess(string $msg) : void{
        $_SESSION['msgSuccess'] = $msg;
    }
    function getMsgSuccess() : ?string{
        if(isset($_SESSION['msgSuccess'])){
            return $_SESSION['msgSuccess'];
        }
        return null;
    }
    function removerMsg() : void{
        if(isset($_SESSION['msgErro'])){
            unset($_SESSION['msgErro']);
        }
        elseif(isset($_SESSION['msgSuccess'])){
            unset($_SESSION['msgSuccess']);
        }
    }
?>