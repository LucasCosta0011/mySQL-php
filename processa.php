<?php

    $host = "sql112.epizy.com";
    $usuario = "epiz_29376694";
    $senha = "paxlac7Wy8";
    $banco = "epiz_29376694_01formPhp";
    $conexao = new mysqli($host,$usuario,$senha,$banco);
    if ($conexo -> connect_error){
        echo "ERRO";
    }
    
    $nomealuno = $_POST['nomealuno'];
    $emailaluno = $_POST['emailaluno'];
    //echo "Nome:" . $nomealuno . "<br>";
    //echo "E-mail:" . $emailaluno;
    $comando_sql = "INSERT INTO tabela_alunos(cod,nomealuno,emailaluno) VALUES(null, '$nomealuno','$emailaluno')";
    if($conexao->query($comando_sql)){

        echo "<script>alert('OK, Cadastro feito com sucesso.');</script>";
        echo "<script>location.href='html.html';</script>";
    }else{

        echo "<script>alert('DEU RUIM');</script>";
    }
    //principais erros: nomes e fechamentos.
       
?>