@extends('template')
@section('content')
	{{-- Sidebar --}}
	<section id='sidebar'>
		<i class='icon-align-justify icon-large' id='toggle'></i>
		<ul id='dock'>
			<br>
			<li class="launcher" id="dashboard-link">
				<i class='icon-dashboard'></i>
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<br>
			<li  class="active launcher" id='employees-link'>
				<i class='icon-file-text-alt'></i>
				<a href="{{ url('employees/list') }}">Empleados</a>
			</li>
			<br>
			<li class="launcher dropdown hover" id='customers-link'>
				<i class='icon-folder-open'></i>
				<a href='{{ url('customers/list') }}'>Clientes</a>
				<ul class='dropdown-menu'>
					<li>
						<a href={{ url('customers/list') }}>Listado</a>
					</li>
					<li>
						<a href='{{url('customers/records/list')}}'>Historial</a>
					</li>
					<li>
						<a href='{{ url('tickets/list') }}'>Tickets</a>
					</li>
				</ul>
			</li>
			<br>
			<li class="launcher" id='products-link'>
				<i class='icon-file'></i>
				<a href="{{ url('products/list') }}">Productos</a>
			</li>
			<br>
			<li class="launcher" id='providers-link'>
				<i class='icon-truck'></i>
				<a href="{{ url('providers/list') }}">Proveedores</a>
			</li>
		</ul>
		<div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
	</section>
	{{-- Tools --}}
	<section id='tools'>
		<ul class='breadcrumb' id='breadcrumb'>
			<li class='title'>Employee</li>
			<li><a href="{{ url('employees/list') }}">Listado de clientes</a></li>
		</ul>
	</section>
	{{-- Content--}}
	<div id='content'>
		<div class='panel panel-default grid'>
			<div class='panel-heading'>
				<i class='icon-table icon-large'></i>
				Listado de clientes
				{{--<div class='panel-tools'>--}}
					{{--<div class='badge'>3 record</div>--}}
				{{--</div>--}}
			</div>
			<div class='panel-body filters'>
				<div class='row'>
					<div class='col-md-6'>
						<a href="javascript:;" data-toggle='toolbar-tooltip' class="btn" onclick="openModalToCreate()">Nuevo empleado</a>
					</div>
					{{--<div class='col-md-3'>--}}
						{{--<select class="form-control filter-select" id="pagination" onchange="getFilteredEmployeesList()">--}}
							{{--<option value="" disabled selected>Clientes a mostrar</option>--}}
							{{--<option value="5">5 clientes</option>--}}
							{{--<option value="10">10 clientes</option>--}}
							{{--<option value="25">25 clientes</option>--}}
							{{--<option value="50">50 clientes</option>--}}
							{{--<option value="100">100 clientes</option>--}}
						{{--</select>--}}
					{{--</div>--}}
					<div class='col-md-3'>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="buscar..." id="filter">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="icon-search"></i></button>
                        </span>
						</div>
						{{--<a href="" id="clear_search" title="Limpiar Búsqueda" class="hidden btn-white" onclick="location.href = 'list'; return false">--}}
						{{--<i class="material-icons white-icon">highlight_off</i></a>--}}
						{{--<button type="button" class="btn btn-white btn-round btn-just-icon" onclick="getFilteredEmployeesList()">--}}
						{{--<i class=""></i>--}}
						{{--</button>--}}
					</div>
				</div>
			</div>
			<table class='table'>
				<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>DNI</th>
					<th>Usuario</th>
					<th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				@foreach($employees as $employee)
					<tr>
						<td>{{$employee->id}}</td>
						<td>{{$employee->name}}</td>
						<td>{{$employee->surname}}</td>
						<td>{{$employee->dni}}</td>
						<td>{{$employee->user}}</td>
						<td class="actions">
							<a href="javascript:;" onclick="openModalToEdit({{$employee->id}})">
								<i class="icon-edit"></i></a>
							<a href="{{ url('employees/delete/'.$employee->id) }}">
								<i class="icon-trash"></i></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<div class='panel-footer'>
			</div>
		</div>
	</div>

	<script src="{{ URL::asset('js/app/employees.js') }}"></script>

	<!-- Modal Registro de empleados -->
	<div class="modal fade" id="modalNewEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<form id="employee-form" method="POST" action="{{ url('employees/create') }}">
			{{ csrf_field() }}
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Añadir Empleado</h4>
					</div>
					<fieldset class="modal-body">
						<div class="form-group">
							<label class="control-label">Nombre</label>
							<input id="name" type="text" class="form-control" name="name" value="{{Input::old('name')}}" required>
							<span class="material-input">{{$errors->first('name')}}</span>
						</div>
						<div class="form-group">
							<label class="control-label">Apellidos</label>
							<input id="surname" type="text" class="form-control" name="surname" value="{{Input::old('surname')}}">
							<span class="material-input">{{$errors->first('surnames')}}</span>
						</div>
						<div class="form-group">
							<label class="control-label">DNI</label>
							<input id="dni" type="text" class="form-control" name="dni" value="{{Input::old('dni')}}">
							<span class="material-input">{{$errors->first('dni')}}</span>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input id="email" type="email" class="form-control" name="email" value="{{Input::old('email')}}">
							<span class="material-input">{{$errors->first('email')}}</span>
						</div>
						<div class="form-group">
							<label class="control-label">Puesto</label>
							<select class="form-control" name="job" id="job">
								<option value="1">Administrador</option>
								<option value="2">Empleado</option>
							</select>
							<span class="material-input">{{$errors->first('job')}}</span>
						</div>
					</fieldset>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		function changeAction(mode, employee_id){
			var form = $('#employee-form');
			var newAction = HOST + EMPLOYEES;
			if(mode === "create"){
				newAction += CREATE;
			}
			if(mode === "edit"){
				newAction += UPDATE + "/" + employee_id;
			}
			form.attr('action', newAction);
		}
	</script>
@stop