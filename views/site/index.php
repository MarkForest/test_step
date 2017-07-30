<?php

/* @var $this yii\web\View */

$this->title = 'Test Step';
$count =1;
?>
<div class="row">
    <h1 class="text-center text-success"><i>Тестовое задание. Должность PHP - программист. Компания it "step"</i></h1>

    <!-- todo Задание 1
    ----------------------->
    <?= $this->render('firstTask',[
        'cities'=>$cities,
        'count'=>$count
    ]);?>

    <!-- todo Задание 2
    ----------------------->
    <?= $this->render('secondTask',[
        'staffes'=>$staffes,
        'count'=>$count,
    ]);?>

    <!-- todo Задание 3
    ----------------------->
    <?= $this->render('thirdTask',[
        'staffes'=>$staffes,
        'count'=>$count,
    ]);?>

    <!-- todo Задание 4
    ----------------------->
    <?= $this->render('fourthTask',[
        'cities'=>$cities,
        'count'=>$count,
    ]);?>

    <!-- todo Задание 5
    ----------------------->
    <?= $this->render('fifthTask',[
        'staffes'=>$staffes,
        'count'=>$count,
    ]);?>

    <!-- todo Задание 6
    ----------------------->
    <?= $this->render('sixthTask',[
        'staffes'=>$staffes,
        'count'=>$count,
    ]);?>

</div>


