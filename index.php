<?php 

$paragrafo_casuale = "In una terra lontana, dietro le montagne Parole, lontani dalle terre di Vocalia e Consonantia, vivono i testi casuali. vivono isolati nella cittadina di Lettere.";

$output = str_replace($_GET["random"], '***', $paragrafo_casuale)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $paragrafo_casuale  ?>  </h1>
    <p> La lunghezza del paragrafo è:<?php echo strlen($paragrafo_casuale)  ?></p>

    <h1><?php echo $output  ?> </h1>
    
</body>
</html>