<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            <p>
            <?php 
                $salario = $_REQUEST["numero"];  //2760
                $atualizado = (int) ($salario / 1380);
                $sobra = $salario % 1380;

                if ($sobra == 0) {
                
                    print "Quem recebe um salário de $salario, ganha $atualizado salários mínimos";
                }

                else{
                    print "Quem recebe um salário de $salario, ganha $atualizado salários mínimos + R$ $sobra";
                }
            ?>
            </p>
        </h1>
    </main>
</body>
</html>

