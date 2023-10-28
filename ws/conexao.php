<?php

$conn = new PDO("sqlite:../database/jogo_ranking"); //classe de conexão do PHP com o bancos de dados

$conn->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE, //Nome do atributo
    PDO::FETCH_OBJ // Associação por objeto
    //PDO::FETCH_BOTH // Associação por número e nome das colunas
);

$nome = $_GET["nome"];
$acertos = $_GET["acertos"];
$erros = $_GET["erros"];
$tentativas = $_GET["tentativas"];
$data = date("d-m-Y H:i:S");


// INSERIR NA TABELA

$q = $conn->prepare("INSERT INTO ranking (nome, acertos, erros, tentativas, data_hora) VALUES(:nome, :acertos, :erros, :tentativas, :data_hora)");

$q->bindParam(":nome", $nome);
$q->bindParam(":acertos", $acertos);
$q->bindParam(":erros", $erros);
$q->bindParam(":tentativas", $tentativas);
$q->bindParam(":data_hora", $data);

$q->execute();

header("Location:../index.php");
?>