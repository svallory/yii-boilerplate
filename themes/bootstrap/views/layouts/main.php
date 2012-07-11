<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- Bootstrap CSS framework -->
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.min.css'); ?>
	<?php 
		/* Uncomment to add responsiveness to your layout 
		Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap-responsive.min.css'); 
		*/
	?>
	<?php Yii::app()->clientScript->registerScript('bootstrap', Yii::app()->theme->baseUrl.'/js/bootstrap.min.js'); ?>
	
	<!-- Your layout -->
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/site.css'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<header>
		<?php $this->widget('EBootstrapNavigation',array(
			'items'=>array(
				array('label'=> CHtml::encode(Yii::app()->name), 'url'=>array('/site/index'), 'template' => '{brand}'),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'fixed' => true,
			'responsive' => true,
			'encodeLabel' => false,
		)); ?>
	</header><!-- header -->
	
	<div class="container" id="page">
	
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
	
		<?php echo $content; ?>
	
		<div class="clear"></div>
	
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->
	
	</div><!-- page -->

</body>
</html>
