<?php 
include_once '../banco/conexao.php';
// Option Dinâmico no Drop-down com AJAX
$id_tipo = @$_POST['id_tipo'];

$query_sabor = "SELECT id_sabor,nome_sabor FROM sabor where tipo_id_tipo ='$id_tipo' ORDER BY nome_sabor";
$result_sabor = mysqli_query($link, $query_sabor);
while ($row_sabor = mysqli_fetch_assoc($result_sabor)){
    echo "<option value = '{$row_sabor['id_sabor']}'>{$row_sabor['nome_sabor']}</option>";
}
?>