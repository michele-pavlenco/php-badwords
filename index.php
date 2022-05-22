<?php 
    $text = 'Com è il tuo gatto';
    $text2 = str_replace('parola', '***', $text);
    if(isset($_GET['parola'])){
        $text = $_GET['parola'];
    } else {
        $text = "Il gatto e grasso ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>






    <h2>Frase:</h2>
    <p><?php echo $text2 ?></p>
    <p>Lunghezza: <?php echo '<strong>'.strlen($text2).'</strong>'?> </p>
    <h2>Frase modificata:</h2>
    <p><?php echo $text ?></p>
    <p>Lunghezza: <?php echo  '<strong>'.strlen($text).'</strong>' ?></p>
    
</body>
</html>