<?php 
    $text = 'Sopra la panca la carpra campa sotto la panca la capra crepa';
    if(isset($_GET['parola'])){
        $text2 = $_GET['parola'];
        $text3 = str_replace($text2, '***',$text); 
    } else {
        $text3 = " ";
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
    <p><?php echo $text ?></p>
    <p>Lunghezza: <?php echo '<strong>'.strlen($text).'</strong>'?> </p>
    <h2>Frase modificata:</h2>
    <p><?php echo $text3 ?></p>
    <p>Lunghezza: <?php echo  '<strong>'.strlen($text3).'</strong>' ?></p>
    
</body>
</html>