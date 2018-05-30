@extends('welcome')

@section('title')
Тестовая страница добавления
@endsection

@section('content')


	<div class="container">
		<div class="row">
			
	{!!Form::open(['action' => 'TestController@store'])!!}


		<div class="form-group">
{!!Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Заголовок'])!!}
		</div>
	
		<div class="form-group">
{!!Form::text('int', null, ['class' => 'form-control', 'placeholder' => 'Число'])!!}	
		</div>

    <hr width="40%">

{!!Form::submit('Готово', ['class' => 'btn btn-primary'])!!}


	{!!Form::close()!!}

		</div>
	</div>


@endsection