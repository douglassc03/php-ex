<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
</head>
<body>
    <main>
        <h1>
            <p>
                <?php 
                $nascimento = $_REQUEST["numero"];
                $hoje = $_REQUEST["ano"];

                $total = $hoje - $nascimento;
                print "Quem nasceu em $nascimento vai ter $total anos em $hoje";
                ?>
            </p>
        </h1>
    </main>
</body>
</html>