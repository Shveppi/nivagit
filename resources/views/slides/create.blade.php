@extends('welcome')

@section('title')
Форма добавления слайда
@endsection


@section('content')

	<div class="container">
		<div class="row">
			
	{!!Form::open(['action' => 'SlideController@store', 'files' => 'true'])!!}


		@include('slides._form')


	{!!Form::close()!!}

		</div>
	</div>

@endsection