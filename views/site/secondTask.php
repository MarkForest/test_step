<?php use app\models\Staff;?>
<div class="div-block">
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
            </tbody>
        </table>
    </div>
    <?php $count=1;?>
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
                                <td><?=Staff::calculate_age($staff->date_of_birth)?></td>
                            </tr>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>