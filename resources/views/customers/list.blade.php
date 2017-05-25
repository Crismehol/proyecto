@extends('template')
@section('title', 'Example title')

@section('content')

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header" data-background-color="red">
							<a href="javascript:;" class="btn btn-default" onclick="openModalToCreate()">Nuevo empleado
								<div class="ripple-container"></div>
							</a>

							<ul class="list-inline pull-right">
								<li>
									<div class="form-group is-empty">
										<select class="form-control filter-select" id="pagination" onchange="getFilteredCustomersList()">
											<option value="" disabled selected>Clientes a mostrar</option>
											<option value="5">5 clientes</option>
											<option value="10">10 clientes</option>
											<option value="25">25 clientes</option>
											<option value="50">50 clientes</option>
											<option value="100">100 clientes</option>
										</select>
									</div>
								</li>
								<li>
									<div class="form-group is-empty">
										<input type="text" class="form-control" placeholder="buscar..." id="filter">
										<span class="material-input"></span>
									</div>
									<a href="" id="clear_search" title="Limpiar Búsqueda" class="hidden btn-white" onclick="location.href = 'list'; return false"><i class="material-icons white-icon">highlight_off</i></a>
									<button type="button" class="btn btn-white btn-round btn-just-icon"
											onclick="getFilteredCustomersList()">
										<i class="material-icons">search</i>
										<div class="ripple-container"></div>
									</button>
								</li>
							</ul>
						</div>
						<div class="card-content table-responsive">
							<table id="example" class="table display">
								<thead class="text-danger bold">
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>DNI</th>
								<th>Email</th>
								<th>Teléfono</th>
								<th>Acciones</th>
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
										<td>
											<a href="javascript:;" onclick="openModalToEdit({{$customer->id}})"><i class="material-icons">mode_edit</i></a>
											<a href="{{ url('employees/delete/'. $customer->id) }}"><i class="material-icons" title="Borrar">delete_forever</i></a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							{{--{{$data['customers']->links()}}--}}
							{{--<script>--}}
								{{--$(document).ready(function () {--}}
									{{--var paginationVal = getURLParameter('pagination');--}}
									{{--$('#pagination').val(paginationVal);--}}

									{{--var filterVal = getURLParameter('filter');--}}
									{{--$('#filter').val(filterVal);--}}
								{{--});--}}
							{{--</script>--}}
							{{--@if($errors->first('name') != null ||--}}
                                {{--$errors->first('contact') != null ||--}}
                                {{--$errors->first('email') != null ||--}}
                                {{--$errors->first('phone') != null )--}}
								{{--<script type="application/javascript">--}}
									{{--$(document).ready(function () {--}}
										{{--$('#modalNewCustomer').modal('show');--}}
									{{--});--}}
								{{--</script>--}}
							{{--@endif--}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ URL::asset('js/app/customers.js') }}"></script>

	<!-- Modal Registro de empleado -->
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
									<label class="control-label">Teléfono</label>
									<input id="phone_number" type="text" class="form-control" name="phone_number" value="">
									<select class="form-control" name="phone_number" id="phone_number">
										<option value="0">Administrador</option>
										<option value="1">Empleado</option>
									</select>
									<span class="material-input">{{$errors->first('phone_number')}}</span>
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

	{{--<script>--}}
		{{--function changeAction(mode, customer_id){--}}
			{{--var form = $('#customer-form');--}}
			{{--var newAction = HOST + CUSTOMERS;--}}
			{{--if(mode === "create"){--}}
				{{--newAction += CREATE;--}}
			{{--}--}}
			{{--if(mode === "edit"){--}}
				{{--newAction += UPDATE + "/" + customer_id;--}}
			{{--}--}}
			{{--form.attr('action', newAction);--}}
		{{--}--}}
		{{--$(function () {--}}
			{{--$("#filter").on('keyup', function (e) {--}}
				{{--if (e.keyCode == 13) {--}}
					{{--getFilteredCustomersList();--}}
				{{--}--}}
			{{--});--}}
			{{--showClearSearch();--}}
		{{--});--}}
	{{--</script>--}}

@stop