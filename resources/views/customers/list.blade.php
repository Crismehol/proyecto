@extends('template')
@section('content')
	<section id='tools'>
		<ul class='breadcrumb' id='breadcrumb'>
			<li class='title'>Clientes</li>
			<li><a href="{{ url('customers/list') }}">Listado de clientes</a></li>
		</ul>
	</section>
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
						{{--<a href="javascript:;" data-toggle='toolbar-tooltip' class="btn" onclick="openModalToCreate()">Registrar cliente</a>--}}
						<a href="{{ url('customers/forms/createCustomer') }}" class="btn">Registrar cliente</a>
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
							<a href="javascript:;" onclick="openModalToEdit({{$customer->id}})">
								<i class="icon-edit"></i></a>
							<a href="{{ url('customers/delete/'.$customer->id) }}">
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
		<form id="user-form" method="POST" action="{{ url('customers/create') }}">
			{{ csrf_field() }}
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Añadir Nuevo Usuario</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">Nombre</label>
									<input id="name" type="text" class="form-control" name="name"
										   value="" required>
									<span class="material-input">{{$errors->first('name')}}</span>
								</div>
							</div>
							<div class="col-md-8 col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">Apellidos</label>
									<input id="surnames" type="text" class="form-control" name="surnames"
										   value="">
									<span class="material-input">{{$errors->first('surnames')}}</span>
								</div>
							</div>
							<div class="col-md-8 col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">DNI</label>
									<input id="dni" type="text" class="form-control" name="dni"
										   value="">
									<span class="material-input">{{$errors->first('dni')}}</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input id="email" type="email" class="form-control" name="email"
										   value="">
									<span class="material-input">{{$errors->first('email')}}</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">Puesto</label>
									<input id="job" type="job" class="form-control" name="job" value="">
									<select class="form-control" name="job" id="job">
										<option value="0">Administrador</option>
										<option value="1">Empleado</option>
									</select>
									<span class="material-input">{{$errors->first('job')}}</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">user</label>
									<input id="user" type="text" class="form-control" name="user"
										   value="" required>
									<span class="material-input">{{$errors->first('user')}}</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group label-floating">
									<label class="control-label">Password</label>
									<input id="password" type="password" class="form-control" name="password"
										   value="" required>
									<span class="material-input">{{$errors->first('password')}}</span>
								</div>
							</div>
						</div>
					</div>
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
		//    $(function () {
		//        $("#filter").on('keyup', function (e) {
		//            if (e.keyCode == 13) {
		//                getFilteredCustomersList();
		//            }
		//        });
		//        showClearSearch();
		//    });
	</script>
@stop