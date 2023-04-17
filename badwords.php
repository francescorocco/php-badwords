<?php
    $paragraph = $_GET['paragraph'];

    $badword = $_GET['badword'];

    $censuredParagraph = str_ireplace($badword, '*** ', $paragraph); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>

    <div>
        <h1>Frase non censurata</h1>
        <div><?php echo $paragraph; ?></div>

        <h2>La frase è composta da <?php echo strlen($paragraph); ?> caratteri</h2>
        <hr>
        <h1>Frase censurata</h1>
        <div><?php echo $censuredParagraph; ?></div>
        <h2>La frase è composta da <?php echo strlen($censuredParagraph); ?> caratteri</h2>

    </div>




    </body>
</html>