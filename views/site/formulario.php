<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="alert alert-info">Mi primer formulario</div>
<div class="alert alert-success"><?= $mensaje?></div>
<?= Html::beginForm(
    Url::toRoute("site/request"),//action
    "get",//method
    ["class"=>"form-inline"] //options
); 
?>

<div class="form-group">
    <?= Html::label("Introduce tu nombre", "nombre") ?>
    <?= Html::textInput("nombre",null,["class"=>"form-control"])?>
</div>

<?= Html::submitInput("Enviar Nombre", ["class"=>"btn btn-primary"])?>

<?= Html::endForm() ?>