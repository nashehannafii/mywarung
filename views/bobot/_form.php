<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bobot $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bobot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_bobot')->textInput() ?>

    <?= $form->field($model, 'bobot')->textInput() ?>

    <?= $form->field($model, 'keterangan_bobot')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
