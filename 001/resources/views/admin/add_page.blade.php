@extends('templates.admin')

@section('header')
	@include('admin.header')
@endsection

@section('content')
<div>
	
	{!! Form::open(['url'=>route('pagesadd'), 'class'=>'form-horizontal', 'method'=>'post', 
	'enctype'=>'multipart/form-data'] )  !!}
		<div class="form-group">
			{!! Form::label('name', 'Название', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name', old('name'),['class'=>'form-control', 'placeholder'=>'...']) !!}	
			</div>
		</div>
		
		<div class="form-group">
			{!! Form::label('alias', 'Псевдоним', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('alias', old('alias'),['class'=>'form-control', 'placeholder'=>'...']) !!}	
			</div>
		</div>
		
		<div class="form-group">
			{!! Form::label('text', 'Текст', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('text', old('text'),['id'=>'editor1', 'class'=>'form-control', 'placeholder'=>'...'] )!!}	
			</div>
		</div>
		
		<div class="form-group">
			{!! Form::label('images', 'Изображение', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'images', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'файла нет']) !!}	
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-8">
				{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}	
				<a href="{{ route('pages') }}" class="btn btn-primary">Назад</a>
			</div>
			
		</div>

	 {!! Form::close() !!}
	 

	 
 <script type="text/javascript">
 	CKEDITOR.replace('text');
 	
 </script>
	 
	 
	 
</div>
@endsection