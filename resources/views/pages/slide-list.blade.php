@extends('welcome')

@section('title')
Просмотр слайдеров
@stop

@section('content')

<div class="row">
	
		@foreach($slides as $slide)
			<div class="panel">
				{{Html::image($slide->pic)}}
				<div class="card-body">
					<div class="card-title">{{$slide->title}}</div>
				</div>
				<a href="#" class="btn btn-primary">Изменить</a>
			</div>
		@endforeach

</div>
<br />
	<nav aria-label="Page navigation example">
			{{$slides->links()}}
	</nav>

@endsection