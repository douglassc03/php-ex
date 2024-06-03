<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desagio1</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
            $numero = $_REQUEST["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "Antecessor: $antecessor\n";
            echo "\n";
            echo "Sucessor: $sucessor";

            ?>
        </p>
    </main>
</body>
</html>