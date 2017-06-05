{{--TODO: mostar la lista de los clientes--}}
@extends('template')
@section('content')
	{{-- Tools --}}
	<section id='tools'>
		<ul class='breadcrumb' id='breadcrumb'>
			<li class='title'>Clientes</li>
			<li><a href="{{ url('customers/records/list') }}">Historiales clientes</a></li>
			{{--<li><a href="{{ url('customers/records/details/list/{customer_id}') }}">Detalles cliente</a></li>--}}
		</ul>
	</section>
	{{-- Content --}}
	<div id='content'>
		<div class='panel panel-default grid'>
			<div class='panel-heading'>
				<i class='icon-table icon-large'></i>Historiales
				{{--<div class='panel-tools'>--}}
					{{--<div class='badge'>3 record</div>--}}
				{{--</div>--}}
			</div>
			<div class='panel-body filters'>
				<div class='row'>
					<div class='col-md-6'>
						{{--<a href="{{ url('employees/forms/createEmployee') }}" class="btn">Registrar empleado</a>--}}
					</div>
					<div class='col-md-3'>
						<select class="form-control filter-select" id="pagination" onchange="getFilteredEmployeesList()">
							<option value="" disabled selected>Empleados a mostrar</option>
							<option value="5">5 empleados</option>
							<option value="10">10 empleados</option>
							<option value="25">25 empleados</option>
							<option value="50">50 empleados</option>
							<option value="100">100 empleados</option>
						</select>
					</div>
					<div class='col-md-3'>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="buscar..." id="filter">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="icon-search"></i></button>
                        </span>
						</div>
						<a href="" id="clear_search" title="Limpiar Búsqueda" class="hidden btn-white" onclick="location.href = 'list'; return false">
						<i class="material-icons white-icon">highlight_off</i></a>
						<button type="button" class="btn btn-white btn-round btn-just-icon" onclick="getFilteredEmployeesList()">
						<i class=""></i>
						</button>
					</div>
				</div>
			</div>
			<table class='table'>
				<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Fecha</th>
					<th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				@foreach($records as $record)
					<tr>
						<td>{{ $record->customer_id }}</td>
						<td>{{ $record->name }}</td>
						<td>{{ $record->surname }}</td>
						<td>{{ $record->update }}</td>
						<td>
							<a href="{{ url('customers/records/details/'.$record->customer_id) }}">
								<i class="icon-file"></i></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<div class='panel-footer'>
			</div>
		</div>
	</div>
@stop