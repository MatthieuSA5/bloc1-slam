<?php
    require_once 'Tableau Génerateur.php'
    $count
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <tiitle>Lorem Ipsum</title>
</head>
<body>
<?=titre("Lorem Ipsum","sans pub")?>
<forme method="post">
    <label for="nb">nombre de paragraphes</label>
    <input type="number" name="cout" id="nb" value="<?=post('count',5)?>">
</form>
<?php
$j=0;
$LoremIpsumArraySize=count(LORE_IPSUM_ARRAY);
for($i=0;$i<$count;$i++){
    $j=rand(0,$LoremIpsumArraySize-1);
    titre("para $i",level:6);
    echo "<div>".shufflepara(LORE_IPSUM_ARRAY[$j])."</div>";
}
?>
</body>
</html>

<?php