@extends('welcome')

@section('title')
Форма редактирования слайда
@endsection


@section('content')

	<div class="container">
		<div class="row">
			
	{!!Form::model($slide, ['method' => 'PATCH', 'action' => ['SlideController@update', $slide->alttitle], 'files' => 'true'])!!}

		@include('slides._form')

			
	{!!Form::close()!!}

		</div>
	</div>

@endsection