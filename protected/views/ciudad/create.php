<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Nueva ciudad<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-6"></div>
</div>