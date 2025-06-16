<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var $model app\models\Application */
/** @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'date_of_birth')->input('date') ?>
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        <?= $form->field($model, 'income')->input('number', ['step' => '0.01']) ?>
        <?= $form->field($model, 'number_of_dependants')->input('number') ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
                'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
            ]) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
