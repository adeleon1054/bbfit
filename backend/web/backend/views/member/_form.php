<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerName')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'customerAddress1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'customerAddress2')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'customerCity')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'customerStates')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'customerZip')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'customerPhone')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'gymPlanID')->textInput() ?>

    <?= $form->field($model, 'startDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
