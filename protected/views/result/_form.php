<?php
/* @var $this ResultController */
/* @var $model Result */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'result-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'resultId'); ?>
		<?php echo $form->textField($model,'resultId'); ?>
		<?php echo $form->error($model,'resultId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_studentId'); ?>
		<?php echo $form->textField($model,'subject_studentId'); ?>
		<?php echo $form->error($model,'subject_studentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
		<?php echo $form->error($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'executionTime'); ?>
		<?php echo $form->textField($model,'executionTime'); ?>
		<?php echo $form->error($model,'executionTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->