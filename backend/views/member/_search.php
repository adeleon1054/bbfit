<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'customerID') ?>

    <?= $form->field($model, 'customerName') ?>

    <?= $form->field($model, 'customerAddress1') ?>

    <?= $form->field($model, 'customerAddress2') ?>

    <?= $form->field($model, 'customerCity') ?>

    <?php // echo $form->field($model, 'customerStates') ?>

    <?php // echo $form->field($model, 'customerZip') ?>

    <?php // echo $form->field($model, 'customerPhone') ?>

    <?php // echo $form->field($model, 'gymPlanID') ?>

    <?php // echo $form->field($model, 'startDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
