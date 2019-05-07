<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	
	<?php echo Form::open(['url'=>route('pagesadd'), 'class'=>'form-horizontal', 'method'=>'post', 
	'enctype'=>'multipart/form-data'] ); ?>

		<div class="form-group">
			<?php echo Form::label('name', 'Название', ['class'=>'col-xs-2 control-label']); ?>

			<div class="col-xs-8">
				<?php echo Form::text('name', old('name'),['class'=>'form-control', 'placeholder'=>'...']); ?>	
			</div>
		</div>
		
		<div class="form-group">
			<?php echo Form::label('alias', 'Псевдоним', ['class'=>'col-xs-2 control-label']); ?>

			<div class="col-xs-8">
				<?php echo Form::text('alias', old('alias'),['class'=>'form-control', 'placeholder'=>'...']); ?>	
			</div>
		</div>
		
		<div class="form-group">
			<?php echo Form::label('text', 'Текст', ['class'=>'col-xs-2 control-label']); ?>

			<div class="col-xs-8">
				<?php echo Form::textarea('text', old('text'),['id'=>'editor1', 'class'=>'form-control', 'placeholder'=>'...'] ); ?>	
			</div>
		</div>
		
		<div class="form-group">
			<?php echo Form::label('images', 'Изображение', ['class'=>'col-xs-2 control-label']); ?>

			<div class="col-xs-8">
				<?php echo Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'images', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'файла нет']); ?>	
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-8">
				<?php echo Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']); ?>	
				<a href="<?php echo e(route('pages')); ?>" class="btn btn-primary">Назад</a>
			</div>
			
		</div>

	 <?php echo Form::close(); ?>

	 

	 
 <script type="text/javascript">
 	CKEDITOR.replace('text');
 	
 </script>
	 
	 
	 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>