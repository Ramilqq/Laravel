@extends('templates.admin')

@section('header')
	@include('admin.header')
@endsection

@section('content')

<div class="wrapper container-fluid">
	

	{!! Form::open(['url'=>route('pagesedit',array('pages'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('name','Название: ', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('name', $data['name'],['class'=>'form-control','placeholder'=>'Ведите имя']) !!}
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('alias','Псевдоним: ', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('alias', $data['alias'],['class'=>'form-control','placeholder'=>'Ведите псевдоним']) !!}
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('text','Текст: ', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('text', $data['text'],['id'=>'editor1','class'=>'form-control','placeholder'=>'Ведите текст']) !!}
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('imagesOld','Изображение: ', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
		{!! Html::image('/assets/img/'.$data['images'],' ',['class'=>'']) !!}
			{!! Form::hidden('imagesOld', $data['images']) !!}
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('images','Изображение: ', ['class'=>'col-xs-2 control-label']) !!}
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
</div>


 <script type="text/javascript">
 	CKEDITOR.replace('text');
 	
 </script>
	 
@endsection