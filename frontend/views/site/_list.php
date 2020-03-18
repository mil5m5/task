<tr>
    <td><?= $model->id ?></td>
    <td><?= $model->name ?></td>
    <td><?= $model->email ?></td>
    <td><?= $model->task ?></td>
    <td>
        <?php if ($model->confirm == 0):?>
            <span style="color: grey">&#10004;</span>
        <?php elseif ($model->confirm == 1) :?>
            <span style="color: #07ff00">&#10004;</span>
        <?php endif;?>
    </td>
</tr>
