{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('ticket_id', 'Ticket_id:') !!}
			{!! Form::text('ticket_id') !!}
		</li>
		<li>
			{!! Form::label('producto_id', 'Producto_id:') !!}
			{!! Form::text('producto_id') !!}
		</li>
		<li>
			{!! Form::label('precio', 'Precio:') !!}
			{!! Form::text('precio') !!}
		</li>
		<li>
			{!! Form::label('cantidad', 'Cantidad:') !!}
			{!! Form::text('cantidad') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}