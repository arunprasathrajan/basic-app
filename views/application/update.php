<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var $model app\models\Application */

$this->title = 'Update Application Record: ' . $model->first_name;
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="application-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
