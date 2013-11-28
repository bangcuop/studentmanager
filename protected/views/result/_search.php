<?php
/* @var $this ResultController */
/* @var $model Result */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'resultId'); ?>
		<?php echo $form->textField($model,'resultId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_studentId'); ?>
		<?php echo $form->textField($model,'subject_studentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'executionTime'); ?>
		<?php echo $form->textField($model,'executionTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->