<?php
/* @var $this ClassroomController */
/* @var $data Classroom */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('classCode')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->classCode), array('view', 'id' => $data->classId)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('className')); ?>:</b>
    <?php echo CHtml::encode($data->className); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('departmentName')); ?>:</b>
    <?php echo CHtml::encode($data->department->departmentName); ?>
    <br />

</div>