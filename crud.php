<?php
    include("conecta.php");

    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if(isset($_POST["inserir"])){   
        $comando = $pdo->prepare("INSERT INTO aluno Values($matricula,'$nome',$idade)");
        $resultado = $comando->execute();
        header("location: cadastro.html");
    }
    if(isset($_POST["excluir"])){
        $comando = $pdo->prepare("DELETE FROM aluno where matricula=$matricula");
        $resultado = $comando->execute();
        header("location: cadastro.html");
    }
    if(isset($_POST["alterar"])){
        $comando = $pdo->prepare("UPDATE FROM aluno SET nome='$nome',idade=$idade WHERE matricula=$matricula");
        $resultado = $comando->execute();
        header("location: cadastro.html");
    }

    if(isset($_POST["listar"])){
        $comando = $pdo->prepare("SELECT * FROM aluno");
        $resultado = $comando->execute();
        header("location: cadastro.html");

        while($linhas = $comando->fetch()){
            $n = $linhas["nome"];
            $m = $linhas["matricula"];
            $i = $linhas["idade"];
            if($i> 18) 
            echo("<div class='D1'> $m $n $i </div>");
        }
        else{
            header("Location: cadastro.html");
        }
    }    
?>