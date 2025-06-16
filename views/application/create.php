<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var $model app\models\Application */

$this->title = 'Create Application Record';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="application-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
