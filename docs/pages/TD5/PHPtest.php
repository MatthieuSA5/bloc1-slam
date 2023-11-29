<?php
$content="Hello Wolrd"
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=devicce-width, user-scalable=no, initial-scale=1,0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title><?=$content?>
    </title>
</head>
<body>
<h1><?=$content?></h1>
<p><?="PHP est capable de passer les variables dans une chaîne : <b>$content</b>"?></p>
<p><?="pour éviter la concaténation <b>".$content."</b> des chaînes"?></p>
</body>
</html>