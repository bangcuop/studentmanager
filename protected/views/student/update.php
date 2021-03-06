<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->studentId=>array('view','id'=>$model->studentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'View Student', 'url'=>array('view', 'id'=>$model->studentId)),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>Update Student <?php echo $model->studentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>