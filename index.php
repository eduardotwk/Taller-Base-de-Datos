<h1>{{ __('Contact') }}</h1>

	<form method="POST" action="{{route('contact')}}">
		@csrf
		<input name="name" placeholder="Nombre.." value="{{old('name')}}" ><br>
		{!! $errors->first('name', '<small>:message</small><br>'	) !!}

		<input type="text" name="Email" placeholder="Correo.." value="{{ old('email') }}"><br>
		{!! $errors->first('Email', '<small>:message</small><br>'	) !!}

		<input name="subject" placeholder="Asunto.." value="Asunto de prueba.." value="{{ old('subject') }}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>'	) !!}

		<textarea name="content" placeholder="Mensaje..">{{old('content')}}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>'	) !!}

		<button>Enviar</button>
	</form>
