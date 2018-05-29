@extends('welcome')

@section('title')
Просмотр слайдеров
@stop

@section('content')


<table class="table table-bordered table-hover">

	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Картинка</th>
			<th scope="col">Заголовок</th>
			<th scope="col">Краткий текст</th>
			<th scope="col">Дата создания / публикации</th>
			<th scope="col">Управление</th>
		</tr>
	</thead>

	<tbody>
		@foreach($slides as $slide)
		<tr>
			<td>1</td>
			<td class="text-center">{{Html::image($slide->pic, 'image', ['class' => 'img-fluid', 'style' => 'max-width: 70px;'])}}</td>
			<td>{{$slide->title}}<br />@isset($slide->description)<small class="text-muted">{{$slide->description}}</small>@endisset</td>
			<td>sad</td>
			<td>{{$slide->created_at}} <br /> {{$slide->published_at}}</td>
			<td>
				{!!Form::open(['method' => 'DELETE', 'action' => ['SlideController@destroy', $slide->alttitle] ])!!}

					<a href="{!!action('SlideController@edit', ['slug' => $slide->alttitle])!!}" class="btn btn-gray br-blue"><i class="fas fa-pencil-alt"></i></a>
					<button class="btn btn-gray br-red" type="submit"><i class="far fa-trash-alt"></i></button>
					
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br />
	<nav aria-label="Page navigation example" class="justify-content-center">
			{{$slides->links()}}
	</nav>

@endsection





