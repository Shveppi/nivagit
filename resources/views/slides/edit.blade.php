@extends('welcome')

@section('title')
Форма редактирования слайда
@endsection


@section('content')
			
	{!!Form::model($slide, ['method' => 'PATCH', 'action' => ['SlideController@update', $slide->alttitle], 'files' => 'true'])!!}

		@include('slides._form')

			
	{!!Form::close()!!}

@endsection