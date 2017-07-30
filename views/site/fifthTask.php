<?php use app\models\Staff;?>
<div class="div-block">
    <h3 class="page-header alert alert-danger">Задание №5</h3>

    <div class="question alert alert-success">
        <p> Показать телефоны всех сотрудников, добавленных с апреля по сентябрь текущего года включительно.</p>
    </div>

    <div class="answer bg-info">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Phone<th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffes as $staff):?>
                    <?php if (Staff::validateCreatedAt($staff->created_at)):?>
                        <tr>
                            <td><?=$count++?></td>
                            <td><?=$staff->name?></td>
                            <td><?=$staff->created_at?></td>
                            <td>
                                <?php foreach ($staff->phones as $phone):?>
                                    <?=$phone->name?><br>
                                <?php endforeach;?>
                            </td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>