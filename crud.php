<?php
include("conecta.php");

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(isset($_POST["gravar"]))
{
    $comando= $pdo->prepare("INSERT INTO alunos(Nome,Idade) VALUES('$nome',$idade)");
}

$resultado = $comando->execute();

//Para voltar no formulário:
    header("location: cadastro.html");
?>