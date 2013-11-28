<?php
/* @var $this ResultController */
/* @var $model Result */

$this->breadcrumbs=array(
	'Results'=>array('index'),
	$model->resultId=>array('view','id'=>$model->resultId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Result', 'url'=>array('index')),
	array('label'=>'Create Result', 'url'=>array('create')),
	array('label'=>'View Result', 'url'=>array('view', 'id'=>$model->resultId)),
	array('label'=>'Manage Result', 'url'=>array('admin')),
);
?>

<h1>Update Result <?php echo $model->resultId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>