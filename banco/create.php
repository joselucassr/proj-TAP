<?php
session_start();
include_once 'conexao.php';

// Faz o request dos inputs dados no cadastro

$nome_tipo = @$_REQUEST['nome_tipo'];
$nome_sabor = @$_REQUEST['nome_sabor'];
$pagamento = @$_REQUEST['pagamento'];


$queryInsert  = $link -> query("insert into venda values (default, '$pagamento', '$nome_tipo', '$nome_sabor', now())");
$affectedRows = mysqli_affected_rows($link);

if ($affectedRows > 0){
    $_SESSION['msg'] = '<p class="mx-auto text-center text-success">Cadastro efetuado com sucesso!</p>';
    header("Location: ../");
}