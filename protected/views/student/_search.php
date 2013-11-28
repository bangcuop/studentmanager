<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'studentCode'); ?>
		<?php echo $form->textField($model,'studentCode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'studentName'); ?>
		<?php echo $form->textField($model,'studentName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classId'); ?>
		<?php echo $form->textField($model,'classId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adress'); ?>
		<?php echo $form->textField($model,'adress',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthDay'); ?>
		<?php echo $form->textField($model,'birthDay',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_check'); ?>
		<?php echo $form->textField($model,'student_check'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_del'); ?>
		<?php echo $form->textField($model,'student_del'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->