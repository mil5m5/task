<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use \yii\widgets\ListView;
use \yii\helpers\Url;
/* @var $dataProvider frontend\controllers\SiteController */
?>
<div class="container">
  <?php $form = ActiveForm::begin()?>

    <?= $form->field($model, 'name')->textInput()?>
    <?= $form->field($model, 'email')->textInput()?>
    <?= $form->field($model, 'task')->textInput()?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

  <?php ActiveForm::end()?>
</div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">
                <a href="<?= Url::toRoute(['site/index', 'col' => 'id'])?>">ID</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'id', 'sort' => 'asc'])?>"> &#8593;</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'id', 'sort' => 'desc'])?>"> &#8595;</a>
            </th>
            <th scope="col">
                <a href="<?= Url::toRoute(['site/index', 'col' => 'name'])?>">Name</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'name', 'sort' => 'asc'])?>"> &#8593;</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'name', 'sort' => 'desc'])?>"> &#8595;</a>
            </th>
            <th scope="col">
                <a href="<?= Url::toRoute(['site/index', 'col' => 'email'])?>">Email</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'email', 'sort' => 'asc'])?>"> &#8593;</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'email', 'sort' => 'desc'])?>"> &#8595;</a>
            </th>
            <th scope="col">
                <a href="<?= Url::toRoute(['site/index', 'col' => 'task'])?>">Task</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'task', 'sort' => 'asc'])?>"> &#8593;</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'task', 'sort' => 'desc'])?>"> &#8595;</a>
            </th>
            <th scope="col">
                <a href="<?= Url::toRoute(['site/index', 'col' => 'confirm'])?>">Confirm</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'confirm', 'sort' => 'asc'])?>"> &#8593;</a>
                <a href="<?= Url::toRoute(['site/index', 'col' => 'confirm', 'sort' => 'desc'])?>"> &#8595;</a>
            </th>
        </tr>
        </thead>
        <tbody>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
]);
?>
        </tbody>
    </table>
