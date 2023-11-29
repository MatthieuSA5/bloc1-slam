<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=devicce-width, user-scalable=no, initial-scale=1,0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>message</title>
</head>
<body>
<?php
extract($_POST);
$message??='Hello World!';
$color??='black';
$size??='15';
?>

<form action="<?=$_server["PHP_SELF"]?>"method="postT">
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="Tapez votre message">
        <?=$message?>
        </textarea>
    </div>
    <div>
        <label for="color">Couleur :</label>
        <input type="color" id="color" name="color" value="<?=$color?>">
    </div>
    <div>
        <label for="size">Taille :</label>
        <input type="number" id="size" name="size" value="<?=$size?>" min="6" max="120">
    </div>
    <button type="submit">Valider</button>
</form>
<p style="color:<?=$color?>; font-size: <?=$size?>px;">
    <?=$message?>
</p>
</body>
</html>