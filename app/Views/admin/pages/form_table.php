<div class="container">
    <table class="table-light table table-sm table-hover" >
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">Почта</th>
                <th scope="col">Тема</th>
                <th scope="col">Сообщение</th>
                <th scope="col">Дата</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data_form->getResult() as $row):?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->fullname; ?></td> 
                    <td><?php echo $row->telephone; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->theme; ?></td>
                    <td><?php echo $row->message; ?></td>
                    <td><?php echo $row->when; ?></td>
                    
                    <td>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary ">Удалить</button>
</div>