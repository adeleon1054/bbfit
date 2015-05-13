<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\GymPlan;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\member */
/* @var $form ActiveForm */

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="frontend-view-signup">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-6">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'customerName') ?>
        <?= $form->field($model, 'customerAddress1') ?>
            <?= $form->field($model, 'customerAddress2') ?>
            <?= $form->field($model, 'customerCity') ?>
        <?= $form->field($model, 'customerStates') ?>
        <?= $form->field($model, 'customerZip') ?>
        <?= $form->field($model, 'customerPhone') ?>
        <?= $form->field($model, 'gymPlanID')
            ->dropDownList(
                ArrayHelper::map(gymPlan::find()->all(), 'gymPlanID', 'planName')
            );
        ?>
    
        <div class="form-group">
<!--            --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
            </div>
        </div>

</div><!-- frontend-view-signup -->
