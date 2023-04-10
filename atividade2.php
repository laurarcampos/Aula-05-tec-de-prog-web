<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $texto = $_POST['texto'];
  $italico = isset($_POST['italico']);
  $negrito = isset($_POST['negrito']);
  $sublinhado = isset($_POST['sublinhado']);
  $repeticoes = $_POST['repeticoes'];
  $tamanho = $_POST['tamanho'];
  $cor = $_POST['cor'];
  $alinhamento = $_POST['alinhamento'];

  if ($italico) {
    $texto = '<i>' . $texto . '</i>';
  }
  if ($negrito) {
    $texto = '<b>' . $texto . '</b>';
  }
  if ($sublinhado) {
    $texto = '<u>' . $texto . '</u>';
  }

  if ($cor) {
    $texto = '<span style="color:' . $cor . ';">' . $texto . '</span>';
  }

  $estiloAlinhamento = '';
  switch ($alinhamento) {
    case 'esquerda':
      $estiloAlinhamento = 'text-align: left;';
      break;
    case 'centralizado':
      $estiloAlinhamento = 'text-align: center;';
      break;
    case 'direita':
      $estiloAlinhamento = 'text-align: right;';
      break;
    case 'justificado':
      $estiloAlinhamento = 'text-align: justify;';
      break;
    default:
      break;
  }

  $tamanhoFonte = '';
  switch ($tamanho) {
    case '12':
      $tamanhoFonte = 'font-size: 12px;';
      break;
    case '16':
      $tamanhoFonte = 'font-size: 16px;';
      break;
    case '20':
      $tamanhoFonte = 'font-size: 20px;';
      break;
    default:
      break;
  }

for ($i=1; $i <= $repeticoes; $i++) { 
    echo '<p style="' . $estiloAlinhamento . '; font-size: '.$tamanho.'px;">' . $texto . '</p>';
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatação</title>
</head>

<body>
<form method="POST">
  <label for="texto">Digite o texto:</label>
  <br>
  <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
  <br>

  <label for="italico">Em itálico:</label>
  <input type="checkbox" name="italico" id="italico"><br>
  <label for="negrito">Em negrito:</label>
  <input type="checkbox" name="negrito" id="negrito"><br>

  <label for="sublinhado">Em sublinhado:</label>
  <input type="checkbox" name="sublinhado" id="sublinhado"><br>

  <label for="cor">Cor:</label>
  <input type="color" name="cor" id="cor"><br>

  <label for="alinhamento">Alinhamento:</label>
  <select name="alinhamento" id="alinhamento">
    <option value="esquerda">Esquerda</option>
    <option value="centralizado">Centralizado</option>
    <option value="direita">Direita</option>
    <option value="justificado">Justificado</option>
  </select><br>

  <label for="repeticoes">Número de repetições:</label>
		<input type="number" id="repeticoes" name="repeticoes" min="1" max="10"><br><br>

		<label for="tamanho">Tamanho da fonte:</label>
		<select id="tamanho" name="tamanho">
			<option value="12">12px</option>
			<option value="16">16px</option>
			<option value="20">20px</option>
		</select><br><br>

  <input type="submit" value="Enviar">
</form>
</body>