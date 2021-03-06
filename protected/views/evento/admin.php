<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#notificacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <div class="row top-admin-row">
            <div class="col-lg-12">
                <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?><span class="glyphicon glyphicon-calendar"></span> <?php echo Yii::app()->params["labelFuncionalidadCalendario"] ?><?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
                <ol class="breadcrumb">
                    <li><a href="<?php echo Yii::app()->createUrl("site/index") ?>">Inicio</a></li>
                    <li class="active"><?php echo Yii::app()->params["labelFuncionalidadCalendario"] ?></li>
                </ol>
                
                <?php echo CHtml::link((Yii::app()->params["labelDesplegarFiltros"]), '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pull-right"><a href="<?php echo Yii::app()->createUrl('evento/create'); ?>"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'notificacion-grid',
                    'dataProvider' => $model->search(),
                    'summaryText' => '',
                    'cssFile' => Yii::app()->params["gridViewStyleSheet"],
                    'emptyText' => Yii::app()->params["labelTablaSinResultados"],
                    'pager' => array(
                        'cssFile' => Yii::app()->params["gridViewStyleSheet"],
                        'header' => Yii::app()->params["labelPaginacionTabla"],
                        'firstPageLabel' => '&lt;&lt;',
                        'prevPageLabel' => Yii::app()->params["prevPageLabel"],
                        'nextPageLabel' => Yii::app()->params["nextPageLabel"],
                        'lastPageLabel' => '&gt;&gt;',
                    ),
                    'columns' => array(
                        array(
                            'name' => 'Inicio',
                            'value' => '$data->fechaHoraDesde',
                            'type' => 'raw',
                        ),
                        array(
                            'name' => 'Fin',
                            'value' => '$data->fechaHoraHasta',
                            'type' => 'raw',
                        ),
                        array(
                            'name' => 'Titulo',
                            'value' => '$data->titulo',
                            'type' => 'raw',
                        ),
                        array(
                            'name' => 'Cliente',
                            'value' => 'CHtml::link($data->emailCliente, Yii::app()->createUrl("cliente/view",array("id"=>$data->idCliente)))',
                            'type' => 'raw',
                        ),
                        array(
                            'name' => 'Inmueble',
                            'value' => 'CHtml::link($data->tituloInmueble, Yii::app()->createUrl("inmueble/view",array("id"=>$data->idInmueble)))',
                            'type' => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{ver}',
                            'buttons' => array
                                (
                                'ver' => array
                                    (
                                    'label' => Yii::app()->params["labelBotonGrillaVer"],
                                    'options' => array('title' => 'ver'),
                                    'url' => 'Yii::app()->createUrl("evento/view", array("id"=>$data->_id))',
                                ),
                            ),
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{editar}',
                            'buttons' => array
                                (
                                'editar' => array
                                    (
                                    'label' => Yii::app()->params["labelBotonGrillaEditar"],
                                    'options' => array('title' => 'editar'),
                                    'url' => 'Yii::app()->createUrl("evento/update", array("id"=>$data->_id))',
                                ),
                            ),
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{eliminar}',
                            'buttons' => array
                                (
                                'eliminar' => array
                                    (
                                    'label' => Yii::app()->params["labelBotonGrillaEliminar"],
                                    'options' => array('title' => 'eliminar'),
                                    'url' => 'Yii::app()->createUrl("evento/delete", array("id"=>$data->_id))',
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>