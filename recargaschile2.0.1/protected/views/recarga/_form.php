<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'recarga-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'usuario_id'); ?>
		<?php echo $form->dropDownList($model, 'usuario_id', GxHtml::listDataEx(Empleado::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'usuario_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cupo_id'); ?>
		<?php echo $form->dropDownList($model, 'cupo_id', GxHtml::listDataEx(Cupo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'cupo_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'local_id'); ?>
		<?php echo $form->dropDownList($model, 'local_id', GxHtml::listDataEx(Local::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'local_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ot'); ?>
		<?php echo $form->textField($model, 'ot'); ?>
		<?php echo $form->error($model,'ot'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model, 'celular', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'celular'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'compania'); ?>
		<?php echo $form->textField($model, 'compania', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'compania'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model, 'monto', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'monto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textField($model, 'comentario', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'comentario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('atencions')); ?></label>
		<?php echo $form->checkBoxList($model, 'atencions', GxHtml::encodeEx(GxHtml::listDataEx(Atencion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('noprepagos')); ?></label>
		<?php echo $form->checkBoxList($model, 'noprepagos', GxHtml::encodeEx(GxHtml::listDataEx(Noprepago::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->