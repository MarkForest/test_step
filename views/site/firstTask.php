<div class="div-block">
    <h3 class="page-header alert alert-danger">Задание №1</h3>
    <div class="question alert alert-success">
        <p>
            Выбрать название города и количество сотрудников,
            проживающих в нём, возраст которых старше 30 лет
            и они созданы более 1 месяца назад.
        </p>
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
                <?php foreach ($cities  as $city):?>
                    <tr>
                        <td><?=$count?></td>
                        <td class=""><?=$city->name?></td>
                        <td><?=count($city->staff)?></td>
                    </tr>
                    <?php $count++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>