<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



  <h4>Панель администратора сайта</h4>
  <br />
	<a class="btn btn-primary" href="<?php echo e(route('home')); ?>"> Вернуться на сайт</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>