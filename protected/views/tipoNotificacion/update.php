<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */
?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Modificar tipo de notificaci&oacute;n<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-6"></div>
</div>