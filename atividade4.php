<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário</title>
</head>

<body>
    <?php
    function cumprimento()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H');

        if ($hora >= 6 && $hora < 12) {
            return "Bom dia";
        } elseif ($hora >= 12 && $hora < 18) {
            return "Boa tarde";
        } else {
            return "Boa noite";
        }
    }
    ?>
    <h1>
        <?php
        echo cumprimento();
        '</h1>'
        ?>

</body>

</html>