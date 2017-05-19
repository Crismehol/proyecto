{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('descripcion', 'Descripcion:') !!}
			{!! Form::textarea('descripcion') !!}
		</li>
		<li>
			{!! Form::label('dioptrias_dcho', 'Dioptrias_dcho:') !!}
			{!! Form::text('dioptrias_dcho') !!}
		</li>
		<li>
			{!! Form::label('dioptrias_izq', 'Dioptrias_izq:') !!}
			{!! Form::text('dioptrias_izq') !!}
		</li>
		<li>
			{!! Form::label('astigmatismo_izq', 'Astigmatismo_izq:') !!}
			{!! Form::text('astigmatismo_izq') !!}
		</li>
		<li>
			{!! Form::label('astigmatismo_dcho', 'Astigmatismo_dcho:') !!}
			{!! Form::text('astigmatismo_dcho') !!}
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