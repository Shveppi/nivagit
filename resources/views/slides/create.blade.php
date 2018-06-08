@extends('welcome')

@section('title')
Форма добавления слайда
@endsection


@section('content')
			
	{!!Form::open(['action' => 'SlideController@store', 'files' => 'true'])!!}


		@include('slides._form')


	{!!Form::close()!!}

@endsection