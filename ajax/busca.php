<?php

$conexao = mysqli_connect('127.0.0.1','root','','estudo') or die('erro ao conectar');

$acao = $_POST['acao'];

$sql = "SELECT * FROM tbmesesferias WHERE id_acao = '$acao'";
$exe = mysqli_query($conexao,$sql);
$qtdRegistros = mysqli_num_rows($exe);

if ($qtdRegistros == 0){
    $html = "<table id='customers'>
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Motivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan='3'>Não existem registros</td>    
                    </tr>
                </tbody>
             </table>";
}else{
    $exe = mysqli_query($conexao,$sql);
    $html = "<table id='customers'>
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Motivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>";
    while ($row = mysqli_fetch_assoc($exe)){
        $numero_mes = $row['numero_mes'];
        $motivo = $row['motivo'];
        $html.= "<tr><td>$numero_mes</td><td>$motivo</td><td></td></tr>";
    }
    $html .="</tbody></table>";
}

echo $html;
