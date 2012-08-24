


<script type="text/javaScript">
function init(){

grill.update('recargas_pendientes-grid');
setTimeout("init()", 5000)
}
$(document).ready(function(){
grilla = $.fn.yiiGridView;
init();
});
</script>

<?php
$this->breadcrumbs=array(
	'Recargas',
);

$this->menu=array(
	array('label'=>'Crear Recarga', 'url'=>array('create')),
	array('label'=>'Ver Ultimas recargas', 'url'=>array('ultimas')),
	array('label'=>'Ver mis Recarga', 'url'=>array('mias')),
	array('label'=>'Exportar', 'url'=>array('export')),
);

?>
<h1>Recargas</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'recargas_pendientes-grid',
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
	//'filter' => $model,
	'template'=>"{items}",
	'columns' => array(
		array(
            'name'=>'OTE',
            'value'=>'$data->id',
        ),
		'compania',
		'celular',
		'monto',
		'estado',


	array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{atender}',
			'buttons'=>array
			(			
			'atender' => array(
					'label'=>'Atender',
					'url'=>'Yii::app()->createUrl("atencion/creaatencion", array("id"=>$data->id))',
					'icon'=>'ok-circle',
					'options' => array(
						'onclick'=>"js:$('#dialog_recarga').dialog('open')",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){
										$('#dialog_recarga').html(data.mensaje);
							}",
							),
						),
				),				
				),
			),	
	
	
)
        ))
        ;
?>

