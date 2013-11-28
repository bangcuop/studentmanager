<?php
/* @var $this ResultController */
/* @var $model Result */

$this->breadcrumbs=array(
	'Results'=>array('index'),
	$model->resultId,
);

$this->menu=array(
	array('label'=>'List Result', 'url'=>array('index')),
	array('label'=>'Create Result', 'url'=>array('create')),
	array('label'=>'Update Result', 'url'=>array('update', 'id'=>$model->resultId)),
	array('label'=>'Delete Result', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->resultId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Result', 'url'=>array('admin')),
);
?>

<h1>View Result #<?php echo $model->resultId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'resultId',
		'subject_studentId',
		'point',
		'executionTime',
	),
)); ?>
