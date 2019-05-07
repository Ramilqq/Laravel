<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    
    <link rel="icon" href="<?php echo e(asset('/assets/favicon.png')); ?>" type="image/png">
<link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo e(asset('/assets/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo e(asset('/assets/css/animate.css')); ?>" rel="stylesheet" type="text/css">


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<header id="headermy">
    <nav class=" navbar-default navbar-static-top ">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <?php if(Route::currentRouteName() == 'home'): ?>
                <ul class="nav navbar-nav" id="mainNav">
		              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
					  <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
					  <li><a href="#service" class="scroll-link">Services</a></li>
					  <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
					  <li><a href="#team" class="scroll-link">Team</a></li>
					  <li><a href="#contact" class="scroll-link">Contact</a></li>
                </ul>
				<?php endif; ?>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">   
                            <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-btn fa-user"></i>Admin</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>    
    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
    
<!--    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  -->  
    
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery-1.11.0.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery-scrolltofixed.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.nav.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.easing.1.3.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/jquery.isotope.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/wow.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/assets/js/custom.js')); ?>"></script>

</body>
</html>
