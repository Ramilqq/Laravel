<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Unique</title>


<link rel="icon" href="{{asset('/assets/favicon.png') }}" type="image/png">
<link href="{{asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css"> 
<link href="{{asset('/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css"> 
<link href="{{asset('/assets/css/animate.css') }}" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

@yield('content')

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
          
          <form action="{{ route('home') }}" method="post">
            <input class="input-text" type="text" name="name" value="{{ old('name') }}" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue; plaseholder=" placeholder="Your Name *">
            
            <input class="input-text" type="email" name="email" value="{{ old('email') }}" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" placeholder="Your Mail *">
            
            <textarea name="text" class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" value="" placeholder="Your Text *">{{ old('text') }}</textarea>
            
            <input class="input-btn" type="submit" value="send message">
            {{ csrf_field() }}
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
<script type="text/javascript" src="{{asset('/assets/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery.nav.js') }}"></script> 
<script type="text/javascript" src="{{asset('/assets/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/wow.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/js/ckeditor5/ckeditor.js') }}"></script>


</body>
</html>