@extends('welcome')

@section('title')
Форма добавления слайда
@endsection


@section('content')

	<div class="container">
		<div class="row">
			
	{!!Form::open(['action' => 'SlideController@store', 'files' => 'true'])!!}


			<div class="form-group">
		{!!Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Заголовок'])!!}
			</div>


			<div class="form-group">
		{!!Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Краткий текст'])!!}
			</div>

			<div class="form-group">
		{!!Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ссылка'])!!}
			</div>
				
			<div class="custom-file">


		<div class="fileupload fileupload-new" data-provides="fileupload">
			<span class="btn btn-primary btn-file"><span class="fileupload-new">
					<span class="glyphicon glyphicon-file"></span> Выбрать файл</span>
					<span class="fileupload-exists">
						<span class="glyphicon glyphicon-file"></span> Выбрать другой файл
					</span>
					{!!Form::file('pic')!!}
			</span>
			<span class="fileupload-preview"></span>
			<a href="#" class="fileupload-exists" data-dismiss="fileupload" style="float: none">
				<span class="glyphicon glyphicon-remove" title="Отменить выбор"></span></a>
		</div>

        </div>

        <hr width="40%">

    	{!!Form::submit('Готово', ['class' => 'btn btn-primary'])!!}
			



	{!!Form::close()!!}

		</div>
	</div>

@endsection