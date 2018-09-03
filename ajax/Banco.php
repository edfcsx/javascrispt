<?php
/**
 * Created by PhpStorm.
 * User: Felipe
 * Date: 02/09/2018
 * Time: 16:23
 */

class Banco{

function exibirMesesPorAcoes($acao){
    $conexao = mysqli_connect('127.0.0.1','root','','estudo') or die('erro ao conectar');
    $sql = "SELECT * FROM tbmesesferias WHERE id_acao = '$acao'";
    $exe = mysqli_query($conexao,$sql);
    $qtd = mysqli_num_rows($exe);

    if ($qtd == 0){
        echo "<table id='customers'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Mês</th>";
        echo "<th>Motivo</th>";
        echo "<th></th>";
        echo "</tr>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td colspan='3'>Não existem restrições</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }else{
        $exe = mysqli_query($conexao,$sql);
        echo "<table id='customers'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Mês</th>";
        echo "<th>Motivo</th>";
        echo "<th></th>";
        echo "</tr>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($exe)){
            echo "<tr>";
            echo "<td>".$row['numero_mes']."</td>";
            echo "<td>".$row['motivo']."</td>";
            echo "<td></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

}

}