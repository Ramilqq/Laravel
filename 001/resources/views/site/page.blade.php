@extends('layouts.app')

@section('content')
<!--Header_section-->
@if(session('status'))
	<div class="alertInfo">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;close</span>
		Почта отправлена. <a href="{{ session('status') }}" class="aLink"> Проверить</a>
	</div> 
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif


 
<!--Hero_Section-->
@if(isset($pagesR) && is_object($pagesR))
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
        
          <div class="col-lg-5 col-sm-7">
            <div class="delay-03s top_left_cont zoomIn wow animated">   
		                <h2><strong> {{ $pagesR['alias'] }} </strong></h2>
		              	<p>{{ $pagesR['text'] }}</p>
              
              <a href="{{Route('home') }}" class=" zoomIn wow animated read_more2">Back</a>
            </div>
          </div>
          
          <div class="col-lg-7 col-sm-5 ">
			<img src="{{asset('../../../public/assets/img/'.$pagesR['images']) }}" class="delay-04s zoomIn wow animated" alt="" />
		  </div>
		  
        </div>
      </div>
    </div>
  </div>
</section>
@endif
<!--Hero_Section--> 
@endsection