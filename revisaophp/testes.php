<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>
</head>
<body>
    <h1>Revisão PHP</h1>
    <a href= "index.html">Home</a>
    <?php
        echo "<p>0i eu soum texto em php </p>";

        $revisão="<p>Ola mundo </p>"
        echo $revisão;

        $x=3;
        $y=1;
        $result=$x+$y;
        echo "<p>O resultado da soma é: $result </p>";

        echo "<p> A variavel x é do tipo: <p>";
        var_dump($x);
        echo "<p> A variavel revisão é do tipo:</p>";
        var_dump($revisao);

     ?>
</body>
</html>