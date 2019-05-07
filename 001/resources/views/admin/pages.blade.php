@extends('templates.admin')

@section('header')
	@include('admin.header')
@endsection

@section('content')
<div style="margin: 0px 50px 0px 50px">
@if($pages)
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
			@foreach($pages as $k => $page)
				<tr>
					<td> {{ $page->id }}</td>
					<td>
						{!! Html::link(route('pagesedit',['page'=>$page->id]), $page->name,['alt'=>$page->name]) !!}
					</td>
					<td> {{ $page->alias }}</td>
					<td> {{ $page->text }}</td>
					<td> {{ $page->created_at }}</td>
					<td>
					{!! Form::open(['url'=>route('pagesedit',['page'=>$page->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
						<!--{!! Form::hidden('action', 'delete') !!}-->
						{{ method_field('DELETE') }}
						{!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
					{!! Form::close() !!}
						</td>
					
				</tr>				
			@endforeach
		</tbody>
	</table>
@endif

{!! Html::link(route('pagesadd'), 'Новая страница', ['class'=>'btn btn-success']) !!}
</div>
@endsection