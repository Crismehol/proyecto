{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nombre', 'Nombre:') !!}
			{!! Form::text('nombre') !!}
		</li>
		<li>
			{!! Form::label('apellidos', 'Apellidos:') !!}
			{!! Form::text('apellidos') !!}
		</li>
		<li>
			{!! Form::label('fecha_nacimiento', 'Fecha_nacimiento:') !!}
			{!! Form::text('fecha_nacimiento') !!}
		</li>
		<li>
			{!! Form::label('telefono', 'Telefono:') !!}
			{!! Form::text('telefono') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}