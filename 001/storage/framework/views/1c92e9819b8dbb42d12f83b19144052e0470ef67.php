<?php $__env->startSection('content'); ?>
<!--Header_section-->


<?php if(session('status')): ?>
	<div class="alertInfo">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;close</span>
		Почта отправлена. <a href="<?php echo e(session('status')); ?>" class="aLink"> Проверить</a>
	</div> 
<?php endif; ?>

<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger">
		<ul>
		<?php foreach($errors->all() as $error): ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>


 
<!--Hero_Section-->
<?php if(isset($pagesR) && is_object($pagesR)): ?>
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
        
          <div class="col-lg-5 col-sm-7">
            <div class="delay-03s top_left_cont zoomIn wow animated">   
		                <h2><strong> <?php echo e($pagesR['alias']); ?> </strong></h2>
		              	<p><?php echo e($pagesR['text']); ?></p>
              
              <a href="<?php echo e(Route('home')); ?>" class=" zoomIn wow animated read_more2">Back</a>
            </div>
          </div>
          
          <div class="col-lg-7 col-sm-5 ">
			<img src="<?php echo e(asset('../../../public/assets/img/'.$pagesR['images'])); ?>" class="delay-04s zoomIn wow animated" alt="" />
		  </div>
		  
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!--Hero_Section--> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>