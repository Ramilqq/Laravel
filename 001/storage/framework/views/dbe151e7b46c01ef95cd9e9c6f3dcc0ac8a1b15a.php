<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Unique</title>


<link rel="icon" href="<?php echo e(asset('/assets/favicon.png')); ?>" type="image/png">
<link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo e(asset('/assets/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo e(asset('/assets/css/animate.css')); ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo e(asset('/assets/js/ckeditor/ckeditor.js')); ?>"></script>
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<div class="container-layer1">
<!--<header id="header_wrapper">-->
	<?php echo $__env->yieldContent('header'); ?>
	
	<?php if(count($errors) > 0): ?>
		<ul>
		<div class="alert alert-danger">
			<?php foreach($errors->all() as $error): ?>
				
				<li> <?php echo e($error); ?> </li>
			<?php endforeach; ?>	
			</div>
		</ul>
	<?php endif; ?>
	
	<?php if(session('status')): ?>
		<div class="alert alert-info">
			<?php echo e(session('status')); ?>

		</div>
	<?php endif; ?>
<!--</header>-->

	<?php echo $__env->yieldContent('content'); ?>
</div>


<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery-1.11.0.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery-scrolltofixed.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.nav.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.easing.1.3.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.isotope.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/wow.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/bootstrap-filestyle.min.js')); ?>"></script>



</body>
</html>