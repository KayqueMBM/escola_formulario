<?php
include ("conecta.php");

$comando = $pdo->prepare("DELETE FROM alunos WHERE matricula=$matricula");

$resultado = $comando->execute();

header("Location: cadastro.html");
