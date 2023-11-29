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

$fonts=['serif','sans serif','cursive','monospace'];

extract($_POST);
$message??='Hello World!';
$color??='black';
$size??='15';
$isItalic=isset($ckItalic);
$italicStyle=$isItalic?";font-style: italic":"";
$italicCk=$isItalic?"checked":"";

$isBold=isset($ckBold);
$boldStyle=$isBold?";font-weight: bold":"";
$boldCk=$isBold?"checked":"";
?>

<form action="<?=$_SERVER["PHP_SELF"]?>"method="post">
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
    <div>
        <input type="checkbox" id="ckBold" name="ckbold">
        <label for="ckBold">Gras</label>
        <input type="checkbox" id="ckItalic" name="ckItalic" value="italic"> <?=$italicCk?>
        <label for="ckItalic">Italique</label>
    </div>
    <div>
        <label for="font">Famille de police</label>
        <select name="font" id="font">
            <?php
            foreach ($font as $font){
                echo
            } ?>
    </div>

    <div>
    <button type="submit">Valider</button>
    </div>
</form>
<p style="color:<?=$color?>; font-size: <?=$size?>px;">
    <?=$message?>
</p>
</body>
</html>