<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
?>

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Ingresar inmueble<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-1"></div>
</div>