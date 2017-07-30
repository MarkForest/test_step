<?php use app\models\Staff;?>

<div class="div-block">

    <h3 class="page-header alert alert-danger">Задание №4</h3>

    <div class="question alert alert-success">
        <p>Показать средний возраст текущих
            сотрудников (статус - 0) по каждому городу.</p>
    </div>

    <div class="answer bg-info">
        <table class="table table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>City</td>
                    <td>Average age</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cities as $city):?>
                    <tr>
                        <td><?=$count++?></td>
                        <td><?=$city->name?></td>
                        <td>
                            <?php
                                $sum = 0;
                                foreach($city->currstaff as $curr_staff):
                                    $sum+=Staff::calculate_age($curr_staff->date_of_birth);
                            ?>
                            <?php endforeach;?>
                            <?=round($sum/count($city->currstaff));?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>