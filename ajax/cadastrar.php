<?php
$conexao = mysqli_connect('127.0.0.1','root','','estudo') or die('erro ao conectar');

$mes = $_POST['mes'];
$motivo = $_POST['motivo'];
$id_acao = $_POST['acao'];

$sql = "SELECT numero_mes FROM tbmesesferias WHERE numero_mes = '$mes' AND id_acao='$id_acao'";
$exe = mysqli_query($conexao,$sql);
$qtd = mysqli_num_rows($exe);

if ($qtd != 0){
    echo 'Não foi possivel inserir pois o mês já encontra-se cadastrado';
}else{
    $sql = "INSERT INTO tbmesesferias(id_acao,motivo,numero_mes) VALUES ('$id_acao','$motivo','$mes')";
    if (mysqli_query($conexao,$sql)){
        echo "Registro inserido com sucesso";
    }else{
        echo "Falha ao inserir o registro por favor entre em contato com o TI";
    }
}