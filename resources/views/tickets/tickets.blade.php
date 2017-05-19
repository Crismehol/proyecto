{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('empleado_id', 'Empleado_id:') !!}
			{!! Form::text('empleado_id') !!}
		</li>
		<li>
			{!! Form::label('cliente_id', 'Cliente_id:') !!}
			{!! Form::text('cliente_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}