{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nombre', 'Nombre:') !!}
			{!! Form::text('nombre') !!}
		</li>
		<li>
			{!! Form::label('descripcion', 'Descripcion:') !!}
			{!! Form::textarea('descripcion') !!}
		</li>
		<li>
			{!! Form::label('precio_sin_iva', 'Precio_sin_iva:') !!}
			{!! Form::text('precio_sin_iva') !!}
		</li>
		<li>
			{!! Form::label('iva', 'Iva:') !!}
			{!! Form::text('iva') !!}
		</li>
		<li>
			{!! Form::label('tipo', 'Tipo:') !!}
			{!! Form::text('tipo') !!}
		</li>
		<li>
			{!! Form::label('proveedor_id', 'Proveedor_id:') !!}
			{!! Form::text('proveedor_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}