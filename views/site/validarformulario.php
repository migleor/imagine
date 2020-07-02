<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="alert alert-info"><b>Formulario Activo</b></div>

<?php

$form  = ActiveForm::begin([
    "method" => "post",
    "enableClientValidation" => true,
]);
?>

<div class="form-group">
    <?= $form->field($model, "nombre")->input("text")?>
</div>

<div class="form-group">
    <?= $form->field($model, "email")->input("email")?>
</div>

<?=  Html::submitButton("Enviar",["class" => "btn btn-primary"])?>

<?php $form->end(); ?>