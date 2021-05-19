<?php 

include "conecta.php";




$nomecompleto = $_REQUEST['nomecompleto'];
$nomedaempresa = $_REQUEST['nomedaempresa'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$descricao = $_REQUEST['descricao'];







$result_cadastro = "INSERT INTO orcamento(nomecompleto, nomedaempresa, email, telefone, descricao) VALUES('$nomecompleto','$nomedaempresa', '$email','$telefone', '$descricao')";

$conexao->query($result_cadastro);
header('location: login_fun.php');

?>