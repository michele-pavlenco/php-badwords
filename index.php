<?php 
    $text = 'Il tuo gatto é grasso';
    $text2 = str_replace('grasso', 'g****o', $text);
    if(isset($_GET['gatto'])){
        $text3 = $_GET['gatto'];
    } else {
        $text3 = "Tu sei grasso ";
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
    <p>Lunghezza: <?php echo  '<strong>'.strlen($text).'</strong>' ?></p>
    <h2>Frase modificata:</h2>
    <p><?php echo $text2 ?></p>
    <p>Lunghezza: <?php echo '<strong>'.strlen($text2).'</strong>'?> </p>
</body>
</html>