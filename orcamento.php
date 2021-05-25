<?php 

include ("conecta.php");




$NomeCompleto = $_REQUEST['NomeCompleto'];
$NomeEmpresa = $_REQUEST['NomeEmpresa'];
$Email = $_REQUEST['Email'];
$Telefone = $_REQUEST['Telefone'];
$Descricao = $_REQUEST['Descricao'];



echo $NomeCompleto;



$result_cadastro = "INSERT INTO orcamento(NomeCompleto, NomeEmpresa, Email, Telefone, Descricao) VALUES('$NomeCompleto','$NomeEmpresa', '$Email','$Telefone', '$Descricao')";

$conexao->query($result_cadastro);
header('location: index.php');

?>