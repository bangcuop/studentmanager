<?php
/* @var $this SubjectController */
/* @var $model Subject */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'subject-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'subjectCode'); ?>
        <?php echo $form->textField($model, 'subjectCode', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'subjectCode'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'subjectName'); ?>
        <?php echo $form->textField($model, 'subjectName', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'subjectName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'more'); ?>
        <?php echo $form->textField($model, 'more'); ?>
        <?php echo $form->error($model, 'more'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->