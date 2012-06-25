<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?=$this->Html->meta('icon');?>
	<?=$this->Html->css('cake.generic.custom');?>
	<?=$this->Html->css('http://twitter.github.com/bootstrap/assets/css/bootstrap.css');?>
	<?=$this->Html->css('http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css');?>

	<?=$this->Html->css('/lib/Font-Awesome/css/font-awesome.css');?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<?=$this->Html->css('base-admin');?>
	<?=$this->Html->css('base-admin-responsive');?>
	
	<?=$this->Html->css('custom');?>

	<?=$this->fetch('meta');?>
	<?=$this->fetch('css');?>
	<?=$this->fetch('script');?>

</head>
<body>

<?=$this->element('menu_account');?>
<?=$this->fetch('menu_main');?>

<?php if ($flash = $this->Session->flash()) { ?>
	<div class="flash"><?=$flash;?></div>
<?php } ?>

<div class="container <?=$this->params['controller'];?>-container <?=$this->params['controller'];?>-<?=$this->params['action'];?>-container">
	<div class="content clearfix">
		<?=$this->fetch('content');?>
	</div>
</div>

<?= $this->element('sql_dump'); ?>

<script src="http://wbpreview.com/previews/WB00U99JJ/js/jquery-1.7.2.min.js"></script>
<script src="http://wbpreview.com/previews/WB00U99JJ/js/bootstrap.js"></script>
<script src="http://wbpreview.com/previews/WB00U99JJ/js/signin.js"></script>
</body>
</html>
