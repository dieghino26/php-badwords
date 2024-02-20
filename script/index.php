<?php


$paragraph = $_GET["paragraph"];
$badword= $_GET["badword"];

$censored_paragraph = str_replace($badword, "***", $paragraph)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo</h3>
    <p><?= $paragraph  ?></p>
    <span>Il paragrafo è lungo <strong><?= mb_strlen($paragraph) ?></strong> caratteri</span>
    <hr>
    
    <h3>Paragrafo censurato</h3>
    <p><?= $censored_paragraph  ?></p>
    <span>Il paragrafo è lungo <strong><?= mb_strlen($censored_paragraph) ?></strong> caratteri</span>
</body>
</html>
