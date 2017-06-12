{{--TODO: mostrar los detalles de un cliente--}}
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
            <li><a href="{{ url('customers/records/list') }}">Historiales</a></li>
            <li><a href="{{ url('customers/records/details/'. $record_details->customer_id) }}">Ficha clínica {{ $record_details->name .' '. $record_details->surname }}</a></li>
        </ul>
    </section>
    {{-- Content --}}
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Registro de empleado
            </div>
            <div class='panel-body filters'>
                <div class='row'>
                    <div class='col-md-6'>
                        <a href="javascript:;" class="btn" onclick="openModalToCreateRecord({{$record_details->id}})">Actualizar datos</a>
                    </div>
                    <div class='col-md-3'></div>
                    <div class='col-md-3'>
                        <select class="form-control filter-select" id="pagination" onchange="getFilteredCustomersList()">
                            <option value="" disabled selected>Revisiones</option>
                            {{--@foreach($record_details as $record_detail)--}}
{{--                                <option value="{{ $record_details->udpate }}"></option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>

                </div>
            </div>
            <div class='panel-body'>
                <fieldset>
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li><strong>Nombre: </strong>{{$record_details->name}}</li>
                                    <li><strong>Apellidos: </strong>{{$record_details->surname}}</li>
                                    <li><strong>DNI: </strong>{{$record_details->dni}}</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><strong>E-mail: </strong>{{$record_details->email}}</li>
                                    <li><strong>Contacto: </strong>{{$record_details->phone_number}}</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table">
                        <tr>
                            <td></td>
                            <th>Eje</th>
                            <th>Cilindro (astigmatismo) </th>
                            <th>Esfera (dioptrías)</th>
                            <th>Adición</th>
                        </tr>
                        <tr>
                            <th>Ojo derecho</th>
                            <td>{{ $record_details->axis_right.'º' }}</td>
                            <td>{{ $record_details->astigmatism_right }}</td>
                            <td>{{ $record_details->diopters_right }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Ojo izquierdo</th>
                            <td>{{ $record_details->axis_left.'º' }}</td>
                            <td>{{ $record_details->astigmatism_left }}</td>
                            <td>{{ $record_details->diopters_left }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <th>Descripción</th>
                            <td colspan="3">{{ $record_details->description }}</td>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/app/customers.js') }}"></script>

    <!-- Modal Registro de cliente -->
    <div class="modal fade" id="modalNewRecords" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <form id="record-form" method="POST" action="{{ url('records/create') }}">
            {{ csrf_field() }}
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Añadir Nuevo Usuario</h4>
                    </div>
                    <fieldset class="modal-body">
                        <div class='col-md-6'>
                            <label class='title'> -- Ojo derecho</label>
                            <div class="form-group">
                                <label class="control-label">Eje</label>
                                <input id="axis_right" type="text" class="form-control" name="axis_right" value="{{Input::old('axis_right')}}">
                                <span class="material-input">{{$errors->first('axis_right')}}</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Dioptrías</label>
                                <input id="diopters_right" type="text" class="form-control" name="diopters_right" value="{{Input::old('diopters_right')}}" required>
                                <span class="material-input">{{$errors->first('diopters_right')}}</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Astigmatismo</label>
                                <input id="astigmatism_right" type="text" class="form-control" name="astigmatism_right" value="{{Input::old('astigmatism_right')}}">
                                <span class="material-input">{{$errors->first('astigmatism_right')}}</span>
                            </div>

                        </div>
                        <div class='col-md-6'>
                            <label class='title'> -- Ojo izquierdo</label>
                            <div class="form-group">
                                <label class="control-label">Eje</label>
                                <input id="axis_left" type="text" class="form-control" name="axis_left" value="{{Input::old('axis_left')}}">
                                <span class="material-input">{{$errors->first('axis_left')}}</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Dioptrías</label>
                                <input id="diopters_left" type="text" class="form-control" name="diopters_left" value="{{Input::old('diopters_left')}}">
                                <span class="material-input">{{$errors->first('diopters_left')}}</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Astigmatismo</label>
                                <input id="astigmatism_left" type="text" class="form-control" name="astigmatism_left" value="{{Input::old('astigmatism_left')}}">
                                <span class="material-input">{{$errors->first('astigmatism_left')}}</span>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="control-label">Observaciones</label>
                                <textarea class="form-control" rows="4" cols="3"></textarea>
                                <span class="material-input">{{$errors->first('description')}}</span>
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
            var form = $('#record-form');
            var newAction = HOST + CUSTOMERS + RECORDS;
            if(mode === "editRecords"){
                newAction += CREATE;
            }
            if(mode === "edit"){
                newAction += UPDATE + "/" + customer_id;
            }
            form.attr('action', newAction);
        }
    </script>
@stop