<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			padding: 20px;
            font-size: 20px;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			width: 400px;
			margin: auto;
		}

		input[type="text"] {
			padding: 10px;
			width: 100%;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		input[type="radio"] {
			margin-right: 10px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}

		#resultado {
			background-color: #fff;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-top: 20px;
			text-align: center;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<form method="post">
		<label for="numero1">Primeiro número:</label><br>
		<input type="text" id="numero1" name="numero1"><br>

		<label for="numero2">Segundo número:</label><br>
		<input type="text" id="numero2" name="numero2"><br>

		<label>Operação:</label><br>
		<input type="radio" id="soma" name="operacao" value="soma" checked>
		<label for="soma">Soma</label><br>
		<input type="radio" id="subtracao" name="operacao" value="subtracao">
		<label for="subtracao">Subtração</label><br>
		<input type="radio" id="multiplicacao" name="operacao" value="multiplicacao">
		<label for="multiplicacao">Multiplicação</label><br>
		<input type="radio" id="divisao" name="operacao" value="divisao">
		<label for="divisao">Divisão</label><br>

		<input type="submit" value="Calcular">

		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$numero1 = $_POST['numero1'];
				$numero2 = $_POST['numero2'];
				$operacao = $_POST['operacao'];

				if ($operacao == 'soma') {
					$resultado = $numero1 + $numero2;
				} elseif ($operacao == 'subtracao') {
					$resultado = $numero1 - $numero2;
				} elseif ($operacao == 'multiplicacao') {
					$resultado = $numero1 * $numero2;
                } elseif ($operacao == 'divisao') {
           
               if ($numero2 == 0) {
                $resultado = 'Erro: divisão por zero';
                } else {
                $resultado = $numero1 / $numero2;
                }
                }
                echo '<div id="resultado">';
                echo 'Resultado: ' . $resultado;
                echo '</div>';
            }
        ?>
    
    </form>
    </body>
</html>    