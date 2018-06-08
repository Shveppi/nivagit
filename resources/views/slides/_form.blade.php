<div class="row">

	<div class="col-md-3 offset-md-3">
		<div class="form-group">
	{!!Form::label('title', 'Заголовок')!!}
	{!!Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Заголовок', 'id' => 'title'])!!}
		</div>

		

		<div class="form-group">
	{!! Form::label('url', 'Ссылка') !!}
	{!!Form::text('url', null, ['class' => "form-control", 'placeholder' => 'Ссылка', 'id' => 'url'])!!}
		</div>

		<div class="form-group">
	{!! Form::label('published', 'Дата публикации') !!}
	{!!Form::text('published_at', Carbon\Carbon::now('Europe/Moscow')->format('Y-m-d H:i'), ['class' => 'form-control datepicker-here', 'placeholder' => 'Дата публикации', 'data-timepicker' => 'true', 'data-time-format' => 'hh:ii', 'id' => 'published'])!!}
		</div>
				
		<div class="custom-file">
			{!! Form::label('file', 'Картинка') !!}
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn btn-primary btn-file"><span class="fileupload-new">
						<span class="glyphicon glyphicon-file"></span> Выбрать файл</span>
						<span class="fileupload-exists">
							<span class="glyphicon glyphicon-file"></span> Выбрать другой файл
						</span>
						{!!Form::file('pic', ['id' => 'file'])!!}
				</span>
				<span class="fileupload-preview"></span>
				<a href="#" class="fileupload-exists" data-dismiss="fileupload" style="float: none">
					<span class="glyphicon glyphicon-remove" title="Отменить выбор"></span></a>
			</div>

	    </div>

	    <hr width="40%">

	
	</div>

	<div class="col-md-3">
		<div class="form-group">
	{!! Form::label('desc', 'Краткий текст') !!}
	{!!Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Краткий текст', 'id' => 'desc'])!!}
		</div>

		<div class="form-group">
			<div class="form-check">
				{!! Form::hidden('active', 0) !!}
				{!! Form::checkbox('active', 1, null, ['class' => 'form-check-input', 'id' => 'active']) !!}
				{!! Form::label('active', null, ['class' => 'checkmark']) !!}
			</div>
		</div>

	</div>

	<div class="container">
		<div class="row justify-content-center">
				{!!Form::submit('Готово', ['class' => 'btn btn-info'])!!}
		</div>
	</div>

</div>