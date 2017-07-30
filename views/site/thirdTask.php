<div class="div-block">

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
