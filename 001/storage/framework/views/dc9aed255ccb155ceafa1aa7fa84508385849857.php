<div class="container portfolio_title">
	<div class="section-title">
		<h1><?php echo e($title); ?></h1>
	</div>
</div>	

<ul class="nav nav-tabs" style="margin-bottom: 4%;">
	<li class="<?php echo e(Route::currentRouteName() == 'admin' ? 'active':''); ?>" >
		<a href="<?php echo e(url('/admin')); ?>" class='' style="background: #b8bdff">Главная</a>
	</li>
	
	<li class="<?php echo e(Route::currentRouteName() == ('pages' && 'pagesadd' && 'pagesedit') ? 'active':''); ?>">
		<a href="<?php echo e(route('pages')); ?>">Pages</a>
	</li>
	
	<li><a href="#">Сообщение</a></li>
	<li><a href="#">Сообщение</a></li>
	<li style="float:  right;"><a href="<?php echo e(url('/logout')); ?>">Выйти из учетной записи</a></li>
</ul>