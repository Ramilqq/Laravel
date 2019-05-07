@extends('templates.admin')

@section('header')
	@include('admin.header')
@endsection

@section('content')



  <h4>Панель администратора сайта</h4>
  <br />
	<a class="btn btn-primary" href="{{ route('home') }}"> Вернуться на сайт</a>
@endsection