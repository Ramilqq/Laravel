<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div style="margin: 0px 50px 0px 50px">
<?php if($pages): ?>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Name</th>
				<th>Alias</th>
				<th>Content</th>
				<th>Date</th>
				<th>Dell</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($pages as $k => $page): ?>
				<tr>
					<td> <?php echo e($page->id); ?></td>
					<td>
						<?php echo Html::link(route('pagesedit',['page'=>$page->id]), $page->name,['alt'=>$page->name]); ?>

					</td>
					<td> <?php echo e($page->alias); ?></td>
					<td> <?php echo e($page->text); ?></td>
					<td> <?php echo e($page->created_at); ?></td>
					<td>
					<?php echo Form::open(['url'=>route('pagesedit',['page'=>$page->id]), 'class'=>'form-horizontal', 'method'=>'post']); ?>

						<!--<?php echo Form::hidden('action', 'delete'); ?>-->
						<?php echo e(method_field('DELETE')); ?>

						<?php echo Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']); ?>

					<?php echo Form::close(); ?>

						</td>
					
				</tr>				
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<?php echo Html::link(route('pagesadd'), 'Новая страница', ['class'=>'btn btn-success']); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>