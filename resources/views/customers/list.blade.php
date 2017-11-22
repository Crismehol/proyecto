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
            <li  class="launcher" id='employees-link'>
                <i class='icon-file-text-alt'></i>
                <a href="{{ url('employees/list') }}">Empleados</a>
            </li>
            <br>
            <li class="active launcher dropdown hover" id='customers-link'>
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
			<li class='title'>Clientes</li>
			<li><a href="{{ url('customers/list') }}">Listado de clientes</a></li>
		</ul>
	</section>
    {{-- Content --}}
	<div id='content'>
		<div class='panel panel-default grid'>
			<div class='panel-heading'>
				<i class='icon-table icon-large'></i>
				Listado de clientes
				<div class='panel-tools'>
					<div class='badge'>3 record</div>
				</div>
			</div>
			<div class='panel-body filters'>
				<div class='row'>
					<div class='col-md-6'>
						<a href="javascript:;" data-toggle='toolbar-tooltip' class="btn" onclick="openModalToCreate()">Nuevo cliente</a>
						<a href="{{ url('customers/exportCsv') }}" class="btn">Exportar en CSV</a>
					</div>
					<div class='col-md-3'>
						<select class="form-control filter-select" id="pagination" onchange="getFilteredCustomersList()">
							<option value="" disabled selected>Clientes a mostrar</option>
							<option value="5">5 clientes</option>
							<option value="10">10 clientes</option>
							<option value="25">25 clientes</option>
							<option value="50">50 clientes</option>
							<option value="100">100 clientes</option>
						</select>
					</div>
					<div class='col-md-3'>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="buscar..." id="filter">
                            <span class="input-group-btn">
                                <button class="btn" type="button"><i class="icon-search"></i></button>
                            </span>
						</div>
						{{--<a href="" id="clear_search" title="Limpiar Búsqueda" class="hidden btn-white" onclick="location.href = 'list'; return false">--}}
						{{--<i class="material-icons white-icon">highlight_off</i></a>--}}
						{{--<button type="button" class="btn btn-white btn-round btn-just-icon" onclick="getFilteredCustomersList()">--}}
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
					<th>Email</th>
					<th>Contacto</th>
					<th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				@foreach($customers as $customer)
					<tr>
						<td>{{$customer->id}}</td>
						<td>{{$customer->name}}</td>
						<td>{{$customer->surname}}</td>
						<td>{{$customer->dni}}</td>
						<td>{{$customer->email}}</td>
						<td>{{$customer->phone_number}}</td>
						<td class="actions">
							<a href="javascript:;" class="btn" onclick="openModalToEdit({{$customer->id}})">
								<i class="icon-pencil"></i></a>
							<a href="{{ url('customers/delete/'.$customer->id) }}" class="btn">
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

	<script src="{{ URL::asset('js/app/customers.js') }}"></script>

	<!-- Modal Registro de cliente -->
	<div class="modal fade" id="modalNewCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<form id="customer-form" method="POST" action="{{ url('customers/create') }}">
			{{ csrf_field() }}
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Clientes</h4>
                    </div>
                    <fieldset class="modal-body">
						<div class="form-group @if(Input::old('name') == null)is-empty @endif">
							<label class="control-label">Nombre</label>
							<input id="name" type="text" class="form-control" name="name" value="{{Input::old('name')}}" required>
							<span class="material-input">{{$errors->first('name')}}</span>
						</div>
						<div class="form-group @if(Input::old('surname') == null)is-empty @endif">
							<label class="control-label">Apellidos</label>
							<input id="surname" type="text" class="form-control" name="surname" value="{{Input::old('surname')}}">
							<span class="material-input">{{$errors->first('surname')}}</span>
						</div>
						<div class="form-group @if(Input::old('dni') == null)is-empty @endif">
							<label class="control-label">DNI</label>
							<input id="dni" type="text" class="form-control" name="dni" value="{{Input::old('dni')}}">
							<span class="material-input">{{$errors->first('dni')}}</span>
						</div>
						<div class="form-group  @if(Input::old('email') == null)is-empty @endif">
							<label class="control-label">Email</label>
							<input id="email" type="email" class="form-control" name="email" value="{{Input::old('email')}}">
							<span class="material-input">{{$errors->first('email')}}</span>
						</div>
						<div class="form-group">
							<label class="control-label @if(Input::old('phone_number') == null)is-empty @endif">Contacto</label>
							<input id="phone_number" type="text" class="form-control" name="phone_number" value="{{Input::old('phone_number')}}">
							<span class="material-input">{{$errors->first('phone_number')}}</span>
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
		function changeAction(mode, customer_id){
			var form = $('#customer-form');
			var newAction = HOST + CUSTOMERS;
			if(mode === "create"){
				newAction += CREATE;
			}
			if(mode === "edit"){
				newAction += UPDATE + "/" + customer_id;
			}
			form.attr('action', newAction);
		}
	</script>
@stop