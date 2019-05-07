<?php $__env->startSection('content'); ?>


<?php if(session('status')): ?>
		<div class="alert alert-info">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">Закрыть</span>
			<?php echo e(session('status')); ?>

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
		              	<p><?php echo $pagesR['text']; ?></p>
              
              <a href="<?php echo e(route('page',$pagesR['id'])); ?>" class=" zoomIn wow animated read_more2">Read more</a>
            </div>
          </div>
          
          <div class="col-lg-7 col-sm-5 ">
			<img src="<?php echo e(asset('/assets/img/'.$pagesR['images'])); ?>" class="delay-04s zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!--Hero_Section--> 

<!--Aboutus-->
<?php if(isset($pages) && is_object($pages)): ?>
<section id="aboutUs">
<div class="inner_wrapper">
  <div class="container">
    <h2><?php echo e($pages['name']); ?></h2>
    <div class="inner_section">
	<div class="row">
	
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
      <img src="<?php echo e(asset('/assets/img/'.$pages['images'])); ?>" 
      class="img-circle delay-03s animated wow zoomIn" alt="">
      </div>
      
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3><?php echo e($pages['alias']); ?></h3><br/> 
		        <p><?php echo e($pages['text']); ?></p>    
          </div>
          <div class="work_bottom"> 
          <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> 
          </div>
	   </div>
      	
      </div>
    </div>
  </div> 
  </div>
</section>
<?php endif; ?>
<!--Aboutus-->

<!--Service-->
<?php if(isset($services) && is_object($services)): ?>
<section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">
	    <?php foreach($services as $k=>$service): ?>
		    <?php if($k == 0 || $k%3 == 0): ?>
			    <div class="row <?php echo e(($k != 0 ? 'borderTop' : '')); ?>">
		    <?php endif; ?>
            <div class="col-lg-4 <?php echo e(($k%3 >0) ? 'borderLeft' : ''); ?>  <?php echo e(($k>2) ? 'mrgTop' : ''); ?>">			
	          <div class="service_block">
	            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa <?php echo e($service->icon); ?>"></i></span> </div>
	            <h3 class="animated fadeInUp wow"><?php echo e($service->name); ?></h3>
	            <p class="animated fadeInDown wow"><?php echo e($service->text); ?></p>
	          </div>
	        </div>
	        <?php if(($k+1)%3 == 0): ?>
		        </div>
	        <?php endif; ?>
	    <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!--Service-->


<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    <?php if(isset($portfoliosFilter)): ?>
	    <div id="filters" class="sixteen columns">
	      <ul class="clearfix">
	      	  <li><a id="all" href="#" data-filter="*" class="active">
	          <h5>All</h5>
	          </a></li>
		      <?php foreach($portfoliosFilter as $tag): ?>
		          <li><a class="" href="#" data-filter=".<?php echo e($tag->filter); ?>">
		          <h5><?php echo e($tag->filter); ?></h5>
		          </a></li>
		      <?php endforeach; ?>    
	      </ul>
	    </div>
	<?php endif; ?>
<!--/Portfolio Filters --> 

<!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
    <?php if(isset($portfolios) && is_object($portfolios)): ?>
      <!-- Portfolio Item -->
      <?php foreach($portfolios as $portfolio): ?>
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   <?php echo e($portfolio->filter); ?> isotope-item">
        <div class="portfolio_img"> <img src="<?php echo e(asset('/assets/img/'.$portfolio->images)); ?>"  alt="Portfolio 1"> </div>        
        
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name"><?php echo e($portfolio->name); ?></h4>
          </div>
        </div>
        </div>
        <?php endforeach; ?>
      <!--/Portfolio Item --> 
    <?php endif; ?>
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<!--main-section team-start-->
<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <?php if(isset($people) && is_object($people)): ?>
    <div class="team_section clearfix">
      <?php foreach($people as $k => $peopl): ?>
            <div class="team_area">
			<div class="team_box wow fadeInDown delay-0<?php echo e(($k*3 + 3)); ?>s">
			<div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
			<img src="<?php echo e(asset('/assets/img/'.$peopl->images)); ?>" alt="">
			<ul>
			<li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
			<li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
			<li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
			<li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
			</ul>
			</div>
			<h3 class="wow fadeInDown delay-0<?php echo e(($k*3 + 3)); ?>s"><?php echo e($peopl->name); ?></h3>
            <span class="wow fadeInDown delay-0<?php echo e(($k*3 + 3)); ?>s">Chief Executive Officer</span>
            <p class="wow fadeInDown delay-0<?php echo e(($k*3 + 3)); ?>s"><?php echo e($peopl->text); ?></p>
            </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<!--/Team-->

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>UNIQUE Infoway</h4>
                                <p>104, Some street, NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+1 234 567890</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>support@sitename.com</p>
                            </div> 
                        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
        <!-- FORM -->
          <div class="form">
          
          <form action="<?php echo e(route('home')); ?>" method="post">
            <input class="input-text" type="text" name="name" value="<?php echo e(old('name')); ?>" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue; plaseholder=" placeholder="Your Name *">
            
            <input class="input-text" type="email" name="email" value="<?php echo e(old('email')); ?>" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" placeholder="Your Mail *">
            
            <textarea name="text" class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" value="" placeholder="Your Text *"><?php echo e(old('text')); ?></textarea>
            
            <input class="input-btn" type="submit" value="send message">
            <?php echo e(csrf_field()); ?>

            </form>
            
          </div>
          <!-- FORM -->
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2014,    Template by Ramil. </span> </div>
  </div>  
  
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>