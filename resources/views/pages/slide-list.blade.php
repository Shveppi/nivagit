@extends('welcome')

@section('title')
Просмотр слайдеров
@stop

@section('content')

<div class="row">
	<div class="card-deck">
		@foreach($slides as $slide)
			<div class="card">
				{{Html::image($slide->pic, 'image', ['class' => 'img-fluid', 'style' => 'max-height: 150px;'])}}

				<div class="card-header">
					{{$slide->title}}
				</div>
				<div class="card-body">


					@isset($slide->description)<p class="card-text	">{{$slide->description}}</p>@endisset


				</div>

				<div class="card-footer">
					<a href="{!!action('SlideController@edit', ['slug' => $slide->alttitle])!!}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
					<a href="{!! action('SlideController@destroy', ['slug' => $slide->alttitle]) !!}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
				</div>
			</div>
		@endforeach
	</div>

</div>
<br />
	<nav aria-label="Page navigation example" class="justify-content-center">
			{{$slides->links()}}
	</nav>

@endsection