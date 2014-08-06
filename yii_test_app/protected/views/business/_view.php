<?php
/* @var $this BusinessController */
/* @var $data Business */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->business_id), array('view', 'id'=>$data->business_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_name')); ?>:</b>
	<?php echo CHtml::encode($data->business_name); ?>
	<br />


</div>