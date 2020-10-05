<?php
/* @var $this TodolistController */
/* @var $model Todolist */

$this->breadcrumbs=array(
	'Todolists'=>array('index'),
	$model->N=>array('view','id'=>$model->N),
	'Update',
);

$this->menu=array(
	array('label'=>'List Todolist', 'url'=>array('index')),
	array('label'=>'Create Todolist', 'url'=>array('create')),
	array('label'=>'View Todolist', 'url'=>array('view', 'id'=>$model->N)),
	array('label'=>'Manage Todolist', 'url'=>array('admin')),
);
?>

<h1>Update Todolist <?php echo $model->N; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>