<?php

/* @var $this yii\web\View */

use app\models\Staff;

$this->title = 'My Yii Application';
?>
<div class="container">
    <div class="row">
    <h1>Тестовое задание IT "Step"</h1>


    <!--=========================================
      ================Задание 1 =================
      ===========================================-->
            <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">
            <h3 class="page-header alert alert-danger">Задание №1</h3>

            <div class="question alert alert-success">
                <p>Выбрать название города и количество сотрудников, проживающих в нём, возраст которых старше 30 лет и они созданы более 1 месяца назад.</p>
            </div>

            <div class="answer bg-info">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>City</th>
                            <th>Count staff in city</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count = 1;
                    foreach ($cities  as $city):?>
                        <tr>
                            <td><?=$count?></td>
                            <td class=""><?=$city->name?></td>
                            <td><?=count($city->staff)?></td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach;?>
                    <?php $count=1;?>
                    </tbody>
                </table>
            </div>
        </div>


    <!--=========================================
      ================Задание 2 =================
      ===========================================-->
    <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">

    <h3 class="page-header alert alert-danger">Задание №2</h3>

    <div class="question alert alert-success">
        <p>Показать имена сотрудников, их возраст, номера телефонов и e-mail. А также возраст сотрудников, которые проживают в городе "Rhayader".</p>
    </div>

    <div class="answer bg-info">
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone number</th>
                <th>e-mail</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($staffes as $staff):?>
                    <tr>
                        <th><?= $count++?></th>
                        <td><?=$staff->name?></td>
                        <td><?=Staff::calculate_age($staff->date_of_birth)?></td>
                        <td>
                            <?php foreach($staff->phones as $phone):?>
                                <?=$phone->name?><br>
                            <?php endforeach;?>
                        </td>
                        <td>
                            <?php foreach($staff->emails as $email):?>
                                <?=$email->name?><br>
                            <?php endforeach;?>
                        </td>
                    </tr>
                <?php endforeach;?>
                <?php $count = 1;?>
            </tbody>
        </table>
    </div>
        <div class="answer bg-info">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Age</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($staffes as $staff):?>
                    <?php foreach($staff->cities as $city):?>
                        <?php if($city->name == 'Rhayader'):?>
                        <tr>
                            <th><?= $count++?></th>
                            <td><?=$staff->name?></td>
                            <td>
                                <?php foreach($staff->cities as $city):?>
                                    <?=$city->name?>
                                <?php endforeach;?>
                            </td>
                            <td><td><?=Staff::calculate_age($staff->date_of_birth)?></td>
                        </tr>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endforeach;?>
                <?php $count = 1;?>
                </tbody>
            </table>
        </div>
    </div>



    <!--=========================================
      ================Задание 3 =================
      ===========================================-->
    <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">

        <h3 class="page-header alert alert-danger">Задание №3</h3>

        <div class="question alert alert-success">
            <p>Показать всех сотрудников и название города, у которых более одного номера телефона и e-mail заканчивается на .com</p>
        </div>

        <div class="answer bg-info">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>e-mail</th>
                    <th>City</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($staffes as $staff):?>
                    <?php if(count($staff->phones)>1):?>
                        <?php foreach($staff->emails as $email):?>
                            <?php if(preg_match('/.com/',$email->name)):?>
                                <tr>
                                    <th><?= $count++?></th>
                                    <td><?=$staff->name?></td>
                                    <td>
                                        <?php foreach($staff->phones as $phone):?>
                                            <?=$phone->name?><br>
                                        <?php endforeach;?>
                                    </td>
                                    <td>
                                        <?=$email->name?><br>
                                    </td>
                                    <td>
                                        <?php foreach($staff->cities as $city):?>
                                            <?=$city->name?>
                                        <?php endforeach;?>
                                    </td>
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>
                <?php endforeach;?>
                <?php $count = 1;?>
                </tbody>
            </table>
        </div>
    </div>



    <!--=========================================
      ================Задание 4 =================
      ===========================================-->
        <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">

            <h3 class="page-header alert alert-danger">Задание №4</h3>

            <div class="question alert alert-success">
                <p>Показать средний возраст текущих сотрудников (статус - 0) по каждому городу.</p>
            </div>

            <div class="answer bg-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aut consectetur dicta dolore, earum eos, est fugit incidunt, magnam nihil pariatur possimus quo reiciendis rem sequi ut vero. Aspernatur.
            </div>
        </div>
    <!--=========================================
      ================Задание 5 =================
      ===========================================-->
        <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">
            <h3 class="page-header alert alert-danger">Задание №5</h3>

            <div class="question alert alert-success">
                <p> Показать телефоны всех сотрудников, добавленных с апреля по сентябрь текущего года включительно.</p>
            </div>

            <div class="answer bg-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aut consectetur dicta dolore, earum eos, est fugit incidunt, magnam nihil pariatur possimus quo reiciendis rem sequi ut vero. Aspernatur.
            </div>
        </div>
    <!--=========================================
      ================Задание 6 =================
      ===========================================-->
        <div style="border:5px solid #f2dede;border-radius: 5px;border-right:none;border-top:none;padding-left: 10px">
            <h3 class="page-header alert alert-danger">Задание №6</h3>

            <div class="question alert alert-success">
                <p> Показать всех сотрудников, у кого мобильный телефон ни разу не редактировался (см. дату создания и дату обновления записи).</p>
            </div>

            <div class="answer bg-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aut consectetur dicta dolore, earum eos, est fugit incidunt, magnam nihil pariatur possimus quo reiciendis rem sequi ut vero. Aspernatur.
            </div>
        </div>
    </div>
</div>


