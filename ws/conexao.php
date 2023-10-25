<?php

$conn = new PDO("sqlite:../database/jogo_ranking.sqlite"); //classe de conexão do PHP com o bancos de dados

$conn->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE, //Nome do atributo
    PDO::FETCH_OBJ // Associação por objeto
    //PDO::FETCH_BOTH // Associação por número e nome das colunas
);

$nome = $_GET["nome"];
$acertos = $_GET["quantidade_acertos"];
$erros = $_GET["quantidade_erros"];
$data = $_GET["data_hora_partida"];


// INSERIR NA TABELA

$q = $conn->prepare("INSERT INTO ranking (nome, quantidade_acertos, quantidade_erros, data_hora_partida ) VALUES(:nome, :quantidade_acertos, :quantidade_erros, :data_hora_partida);");

$q->bindParam(":nome", $nome);
$q->bindParam(":quantidade_acertos", $acertos);
$q->bindParam(":quantidade_erros", $erros);
$q->bindParam(":data_hora_partida", $data);

$q->execute();

header("Location:../index.html");
?>