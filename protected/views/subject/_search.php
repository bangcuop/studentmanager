<?php
/* @var $this SubjectController */
/* @var $model Subject */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>


    <div class="row">
        <?php echo $form->label($model, 'subjectCode'); ?>
        <?php echo $form->textField($model, 'subjectCode', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'subjectName'); ?>
        <?php echo $form->textField($model, 'subjectName', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'more'); ?>
        <?php echo $form->textField($model, 'more'); ?>
    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->