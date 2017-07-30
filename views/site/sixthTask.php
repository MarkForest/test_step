<?php  use app\models\Staff;?>
<div class="div-block">
    <h3 class="page-header alert alert-danger">Задание №6</h3>

    <div class="question alert alert-success">
        <p> Показать всех сотрудников, у кого мобильный телефон ни разу не редактировался (см. дату создания и дату обновления записи).</p>
    </div>

    <div class="answer bg-info">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At Phone</th>
                    <th>Updated At Phone</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($staffes as $staff):?>
                    <?php if (count($staff->phones)):?>
                        <?php $isUpdate=false;?>
                        <?php foreach($staff->phones as $phone):?>
                            <?php if (!Staff::compareDates($phone->created_at,$phone->updated_at)):?>
                                <?php $isUpdate=true;?>
                            <?php endif;?>
                        <?php endforeach;?>

                        <?php if(!$isUpdate):?>
                            <tr>
                                <td><?=$count++?></td>
                                <td><?=$staff->name?></td>
                                <td>
                                <?php foreach ($staff->phones as $phone):?>
                                    <?=$phone->created_at?>
                                <?php endforeach;?>
                                </td>

                                <td>
                                    <?php foreach ($staff->phones as $phone):?>
                                        <?=$phone->updated_at?>
                                    <?php endforeach;?>
                                </td>
                            </tr>
                        <?php endif;?>
                    <?php endif;?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>