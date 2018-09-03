<?php
require_once 'Banco.php';
$banco = new Banco();

$acao = "123";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Aprendendo Ajax</title>
</head>
<body>

    <fieldset>
        <legend>Ajax - cadastro</legend>
        <input type="hidden" id="acao" value="<?php echo $acao?>">
        <span>
            <select id="mes">
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Marco</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
        </span>
        <span>
            <input type="text" id="motivo" placeholder="digite o motivo...">
        </span>
        <span>
            <button id="cadastrar" onclick="start()">Cadastrar</button>
        </span>
        <h2>Meses cadastrados</h2>
        <div id='dados'></div>
        <div id="dadosPhp">
            <?php $banco->exibirMesesPorAcoes($acao);?>
        </div>
    </fieldset>

    <style>

        fieldset > legend {
            font-size: 18pt;
            color: #4CAF50;
            font-weight: bold;
        }

        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>

    <script>
        function start() {
            let acao = document.getElementById('acao').value;
            var mes = document.getElementById('mes').value;
            var motivo = document.getElementById('motivo');
            const divPhp = document.getElementById('dadosPhp');
            divPhp.style.display = 'none';
            cadastrar(mes,motivo.value,acao);
            buscar(acao);
            motivo.value = "";
        }

        function cadastrar(mes,motivo,acao) {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: 'cadastrar.php',
                data: {mes: mes, motivo: motivo, acao: acao},
                success: function (retorno) {
                    alert(retorno)
                },
                error: function () {
                    alert('Não foi possivel cadastrar')
                }
            });
        }

        function buscar(acao){
            var api = "busca.php";
            $.ajax({
                type: "POST",
                dataType: "html",
                url: api,
                beforeSend: function(){
                    $("#dados").html('Carregando...');
                },
                data: {acao: acao},
                success: function(msg){
                    $("#dados").html(msg);
                },
                error: function () {
                    alert('Nao foi possivel carregar os dados')
                }
            });
        }
    </script>
</body>
</html>
