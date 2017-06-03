@extends('template')
@section('content')
<section id='tools'>
    <ul class='breadcrumb' id='breadcrumb'>
        <li class='title'>Empleados</li>
        <li><a href="{{ url('employees/list') }}">Listado de empleados</a></li>
        <li><a href="{{ url('employees/forms/createEmployee') }}">Registrar empleados</a></li>
    </ul>
</section>
<div id='content'>
    <div class='panel panel-default'>
        <div class='panel-heading'>
            <i class='icon-edit icon-large'></i>
            Registro de empleado
        </div>
        <div class='panel-body'>
            <form method="post" action="{{ url('employees/create') }}">
            {{ csrf_field() }}
                <fieldset>
                    <div class="form-group @if(Input::old('name') == null) is-empty @endif">
                        <label class="control-label">Nombre</label>
                        <input id="name" type="text" class="form-control" name="name"
                               value="{{Input::old('name')}}" required>
                        <span class="material-input">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group @if(Input::old('surname') == null) is-empty @endif">
                        <label class="control-label">Apellidos</label>
                        <input id="surname" type="text" class="form-control" name="surname"
                               value="{{Input::old('surname')}}">
                        <span class="material-input">{{$errors->first('surname')}}</span>
                    </div>
                    <div class="form-group @if(Input::old('dni') == null) is-empty @endif">
                        <label class="control-label">DNI</label>
                        <input id="dni" type="text" class="form-control" name="dni"
                               value="{{Input::old('dni')}}">
                        <span class="material-input">{{$errors->first('dni')}}</span>
                    </div>
                    <div class="form-group @if(Input::old('email') == null) is-empty @endif">
                        <label class="control-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{Input::old('email')}}">
                        <span class="material-input">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group @if(Input::old('job') == null) is-empty @endif">
                        <label class="control-label">Puesto</label>
                        <select class="form-control" name="job" id="job">
                            <option value="0">Administrador</option>
                            <option value="1">Empleado</option>
                        </select>
                        <span class="material-input">{{$errors->first('job')}}</span>
                    </div>
                    <div class="form-group  @if(Input::old('user') == null) is-empty @endif">
                        <label class="control-label">Usuario</label>
                        <input id="user" type="text" class="form-control" name="user"
                               value="{{Input::old('user')}}" required>
                        <span class="material-input">{{$errors->first('user')}}</span>
                    </div>
                    <div class="form-group  @if(Input::old('password') == null) is-empty @endif">
                        <label class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password"
                               value="{{Input::old('password')}}" required>
                        <span class="material-input">{{$errors->first('password')}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@stop