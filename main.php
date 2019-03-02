<html>
<head>
    <title>Ферма дяди Боба</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
include_once 'uncleBobFarm.php';
/*ЛЮБЫМ МЕТОДОМ POST GET ИЛИ ИНЫМ ДРУГИМ ДОБАВЛЯЕМ НОВЫЕ ОБЪЕКТЫ, ИЛИ УБИРАЕМ*/
$new_cow = 2;
$new_chiken = 5;

$productCollection = new UncleBobFarm();
$statisticsCows = $productCollection -> milkingCows($new_cow);
$statisticsChiken = $productCollection -> collectEdds($new_chiken);
?>
<div class="stable">
    <div><h2>Дойка молока</h2></div>
<?php
    arsort($statisticsCows); //СОРТИРУЕМ МАССИВ ПО УБЫВАНИЮ
    echo '<div><strong>Рейтинг коровок: </strong><br>';
    $total_milk = 0;
    foreach ($statisticsCows as $idCow => $liter)
    {
        echo 'С коровки '.$idCow.' надоили '.$liter.' литров.<br>';
        $total_milk += $liter;
    }
    echo '<br>Всего молока:'.$total_milk.' литров</div>';
?>
    <div><strong>Топ 3 коровок: </strong><br>
<?php
    $i = 0;
foreach ($statisticsCows as $idCow => $liter)
{
    if ($i++ == 3) break;
    echo 'Коровка '.$idCow.' отдала '.$liter.' литров.<br>';
}
?>
</div>

    <div><strong>Антитоп 3 коровок: </strong><br>
<?php
asort($statisticsCows); //СОРТИРУЕМ МАССИВ ПО ВОЗРАСТАНИЮ ДЛЯ АНТИРЕЙТИНГА
$j = 0;
foreach ($statisticsCows as $idCow => $liter)
{
    if ($j++ == 3) break;
    echo 'Коровка '.$idCow.' отдала '.$liter.' литров.<br>';
}
?>
</div>
</div>

<div class="stable">
    <div><h2>Сбор яиц</h2></div>
    <?php
    arsort($statisticsChiken);
    echo '<div><strong>Рейтинг курочек: </strong><br>';
    $total_eggs = 0;
    foreach ($statisticsChiken as $idChiken => $egg)
    {
        echo 'С курочки '.$idChiken.' собрали '.$egg.' яиц.<br>';
        $total_eggs += $egg;
    }
    echo '<br>Всего яиц:'.$total_eggs.' штук</div>';
    ?>
    <div><strong>Топ 3 курочки: </strong><br>
        <?php
        $i = 0;
        foreach ($statisticsChiken as $idChiken => $egg)
        {
            if ($i++ == 3) break;
            echo 'Курочка '.$idChiken.' принесла '.$egg.' яиц.<br>';
        }
        ?>
    </div>

    <div><strong>Антитоп 3 коровок: </strong><br>
        <?php
        asort($statisticsChiken);
        $j = 0;
        foreach ($statisticsChiken as $idChiken => $egg)
        {
            if ($j++ == 3) break;
            echo 'курочка '.$idChiken.' принесла '.$egg.' яиц.<br>';
        }
        ?>
    </div>
</div>
</body>
</html>