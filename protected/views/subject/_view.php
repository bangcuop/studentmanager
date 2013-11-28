<?php
/* @var $this SubjectController */
/* @var $data Subject */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('subjectCode')); ?>:</b>
    <?php echo CHtml::encode($data->subjectCode); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('subjectName')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->subjectName), array('view', 'id' => $data->subjectId)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('more')); ?>:</b>
    <?php echo CHtml::encode($data->more); ?>
    <br />




</div>