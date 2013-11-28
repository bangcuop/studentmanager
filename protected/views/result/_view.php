<?php
/* @var $this ResultController */
/* @var $data Result */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->resultId), array('view', 'id'=>$data->resultId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_studentId')); ?>:</b>
	<?php echo CHtml::encode($data->subject_studentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('executionTime')); ?>:</b>
	<?php echo CHtml::encode($data->executionTime); ?>
	<br />


</div>