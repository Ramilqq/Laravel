<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper container-fluid">
	

	<?php echo Form::open(['url'=>route('pagesedit',array('pages'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']); ?>

	<div class="form-group">
		<?php echo Form::hidden('id', $data['id']); ?>

		<?php echo Form::label('name','Название: ', ['class'=>'col-xs-2 control-label']); ?>

		<div class="col-xs-8">
			<?php echo Form::text('name', $data['name'],['class'=>'form-control','placeholder'=>'Ведите имя']); ?>

		</div>
	</div>
	
	<div class="form-group">
		<?php echo Form::label('alias','Псевдоним: ', ['class'=>'col-xs-2 control-label']); ?>

		<div class="col-xs-8">
			<?php echo Form::text('alias', $data['alias'],['class'=>'form-control','placeholder'=>'Ведите псевдоним']); ?>

		</div>
	</div>
	
	<div class="form-group">
		<?php echo Form::label('text','Текст: ', ['class'=>'col-xs-2 control-label']); ?>

		<div class="col-xs-8">
			<?php echo Form::textarea('text', $data['text'],['id'=>'editor1','class'=>'form-control','placeholder'=>'Ведите текст']); ?>

		</div>
	</div>
	
	<div class="form-group">
		<?php echo Form::label('imagesOld','Изображение: ', ['class'=>'col-xs-2 control-label']); ?>

		<div class="col-xs-8">
		<?php echo Html::image('/assets/img/'.$data['images'],' ',['class'=>'']); ?>

			<?php echo Form::hidden('imagesOld', $data['images']); ?>

		</div>
	</div>
	
	<div class="form-group">
		<?php echo Form::label('images','Изображение: ', ['class'=>'col-xs-2 control-label']); ?>

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

</div>


 <script type="text/javascript">
 	CKEDITOR.replace('text');
 	
 </script>
	 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>